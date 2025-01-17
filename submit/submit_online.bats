#!/usr/bin/env bats

# These tests assume presence of a running DOMjudge instance at the
# baseurl specified in the `paths.mk` file one directory up.

load 'assert'

setup() {
    export SUBMITCONTEST="demo"
    export SUBMITBASEURL="$(grep '^BASEURL' ../paths.mk | tr -s ' ' | cut -d ' ' -f 3)"
}

@test "contest via parameter overrides environment" {
    run ./submit -c bestaatniet
    assert_failure 1
    assert_partial "error: No (valid) contest specified"

    run ./submit --contest=bestaatookniet
    assert_failure 1
    assert_partial "error: No (valid) contest specified"
}

@test "hello problem id and name are in help output" {
    run ./submit --help
    assert_success
    assert_regex "hello *- *Hello World"
}

@test "languages and extensions are in help output" {
    run ./submit --help
    assert_success
    assert_regex "C *- *c"
    assert_regex "C\+\+ *- *c\+\+, cc, cpp, cxx"
    assert_regex "Java *- *java"
}

@test "stale file emits warning" {
    touch -d '2000-01-01' $BATS_TMPDIR/test-hello.c
    run ./submit -p hello $BATS_TMPDIR/test-hello.c <<< "n"
    assert_regex "test-hello.c' has not been modified for [0-9]* minutes!"
}

@test "recent file omits warning" {
    touch $BATS_TMPDIR/test-hello.c
    run ./submit -p hello $BATS_TMPDIR/test-hello.c <<< "n"
    refute_line -e "test-hello.c' has not been modified for [0-9]* minutes!"
}

@test "binary file emits warning" {
    cp $(which bash) $BATS_TMPDIR/binary.c
    run ./submit -p hello $BATS_TMPDIR/binary.c <<< "n"
    assert_partial "binary.c' is detected as binary/data!"
}

@test "empty file emits warning" {
    touch $BATS_TMPDIR/empty.c
    run ./submit -p hello $BATS_TMPDIR/empty.c <<< "n"
    assert_partial "empty.c' is empty"
}

@test "detect problem name and language" {
    cp ../tests/test-hello.java $BATS_TMPDIR/hello.java
    run ./submit $BATS_TMPDIR/hello.java <<< "n"
    assert_line "Submission information:"
    assert_line "  problem:     hello"
    assert_line "  language:    Java"
}

@test "options override detection of problem name and language" {
    cp ../tests/test-hello.java $BATS_TMPDIR/hello.java
    run ./submit -p boolfind -l cpp $BATS_TMPDIR/hello.java <<< "n"
    assert_line "Submission information:"
    assert_line "  problem:     boolfind"
    assert_line "  language:    C++"
}

@test "non existing problem name emits erorr" {
    cp ../tests/test-hello.java $BATS_TMPDIR/hello.java
    run ./submit -p nonexistent -l cpp $BATS_TMPDIR/hello.java <<< "n"
    assert_failure 1
    assert_partial "error: No known problem specified or detected"
}

@test "non existing language name emits erorr" {
    cp ../tests/test-hello.java $BATS_TMPDIR/hello.java
    run ./submit -p boolfind -l nonexistent $BATS_TMPDIR/hello.java <<< "n"
    assert_failure 1
    assert_partial "error: No known language specified or detected"
}

@test "detect entry point Java" {
    skip "Java does not require an entry point in the default installation"
    run ./submit -p hello ../tests/test-hello.java <<< "n"
    assert_line '  entry point: test-hello'
}

@test "detect entry point Python" {
    skip "Python does not require an entry point in the default installation"
    touch $BATS_TMPDIR/test-extra.py
    run ./submit -p hello ../tests/test-hello.py $BATS_TMPDIR/test-extra.py <<< "n"
    assert_line '  entry point: test-hello.py'
}

@test "detect entry point Kotlin" {
    run ./submit --help
    if ! echo "$output" | grep 'Kotlin:' ; then
        skip "Kotlin not enabled"
    fi
    run ./submit -p hello ../tests/test-hello.kt <<< "n"
    assert_line '  entry point: Test_helloKt'
}

@test "options override entry point" {
    run ./submit -p hello -e Main ../tests/test-hello.java <<< "n"
    assert_line '  entry point: Main'

    run ./submit -p hello --entry_point=mypackage.Main ../tests/test-hello.java <<< "n"
    assert_line '  entry point: mypackage.Main'
}

@test "accept multiple files" {
    cp ../tests/test-hello.java ../tests/test-classname.java ../tests/test-package.java $BATS_TMPDIR/
    run ./submit -p hello $BATS_TMPDIR/test-*.java <<< "n"
    assert_line "  filenames:   $BATS_TMPDIR/test-classname.java $BATS_TMPDIR/test-hello.java $BATS_TMPDIR/test-package.java"
}

@test "deduplicate multiple files" {
    cp ../tests/test-hello.java ../tests/test-package.java $BATS_TMPDIR/
    run ./submit -p hello $BATS_TMPDIR/test-hello.java $BATS_TMPDIR/test-hello.java $BATS_TMPDIR/test-package.java <<< "n"
    assert_line "  filenames:   $BATS_TMPDIR/test-hello.java $BATS_TMPDIR/test-package.java"
}

@test "submit solution" {
    run ./submit -y -p hello ../tests/test-hello.c
    assert_success
    assert_regex "Submission received: id = s[0-9]*, time = [0-9]{2}:[0-9]{2}:[0-9]{2}"
    assert_regex "Check http[^ ]*/[0-9]* for the result."
}
