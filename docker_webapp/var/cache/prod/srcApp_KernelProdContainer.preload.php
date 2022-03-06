<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

require dirname(__DIR__, 4).'/lib/vendor/autoload.php';
require __DIR__.'/ContainerDN7Qfxz/srcApp_KernelProdContainer.php';

$classes = [];
$classes[] = 'Doctrine\Bundle\DoctrineCacheBundle\DoctrineCacheBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'JMS\SerializerBundle\JMSSerializerBundle';
$classes[] = 'Nelmio\ApiDocBundle\NelmioApiDocBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'Symfony\Bundle\MonologBundle\MonologBundle';
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'FOS\RestBundle\FOSRestBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser';
$classes[] = 'Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'mixed';
$classes[] = 'current';
$classes[] = 'App\ApiDescriber\ParameterRefMergeDescriber';
$classes[] = 'App\Controller\API\AwardsController';
$classes[] = 'App\Controller\API\BalloonController';
$classes[] = 'App\Controller\API\ClarificationController';
$classes[] = 'App\Controller\API\ContestController';
$classes[] = 'App\Controller\API\ExecutableController';
$classes[] = 'App\Controller\API\GeneralInfoController';
$classes[] = 'App\Controller\API\GroupController';
$classes[] = 'App\Controller\API\JudgehostController';
$classes[] = 'App\Controller\API\JudgementController';
$classes[] = 'App\Controller\API\JudgementTypeController';
$classes[] = 'App\Controller\API\LanguageController';
$classes[] = 'App\Controller\API\OrganizationController';
$classes[] = 'App\Controller\API\ProblemController';
$classes[] = 'App\Controller\API\RunController';
$classes[] = 'App\Controller\API\ScoreboardController';
$classes[] = 'App\Controller\API\SubmissionController';
$classes[] = 'App\Controller\API\TeamController';
$classes[] = 'App\Controller\API\TestcaseController';
$classes[] = 'App\Controller\API\UserController';
$classes[] = 'App\Controller\Jury\AnalysisController';
$classes[] = 'App\Controller\Jury\AuditLogController';
$classes[] = 'App\Controller\Jury\BalloonController';
$classes[] = 'App\Controller\Jury\ClarificationController';
$classes[] = 'App\Controller\Jury\ConfigController';
$classes[] = 'App\Controller\Jury\ContestController';
$classes[] = 'App\Controller\Jury\ExecutableController';
$classes[] = 'App\Controller\Jury\ImportExportController';
$classes[] = 'App\Service\BaylorCmsService';
$classes[] = 'App\Controller\Jury\InternalErrorController';
$classes[] = 'App\Controller\Jury\JudgehostController';
$classes[] = 'App\Controller\Jury\JudgehostRestrictionController';
$classes[] = 'App\Controller\Jury\JuryMiscController';
$classes[] = 'App\Controller\Jury\LanguageController';
$classes[] = 'App\Controller\Jury\PrintController';
$classes[] = 'App\Controller\Jury\ProblemController';
$classes[] = 'App\Controller\Jury\RejudgingController';
$classes[] = 'App\Controller\Jury\ScoreboardController';
$classes[] = 'App\Controller\Jury\ShadowDifferencesController';
$classes[] = 'App\Controller\Jury\SubmissionController';
$classes[] = 'App\Controller\Jury\TeamAffiliationController';
$classes[] = 'App\Controller\Jury\TeamCategoryController';
$classes[] = 'App\Controller\Jury\TeamController';
$classes[] = 'App\Controller\Jury\UserController';
$classes[] = 'App\Controller\PublicController';
$classes[] = 'App\Controller\RootController';
$classes[] = 'App\Controller\SecurityController';
$classes[] = 'App\Controller\Team\ClarificationController';
$classes[] = 'App\Controller\Team\MiscController';
$classes[] = 'App\Controller\Team\ProblemController';
$classes[] = 'App\Controller\Team\ScoreboardController';
$classes[] = 'App\Controller\Team\SubmissionController';
$classes[] = 'App\EventListener\ApiHeadersListener';
$classes[] = 'App\EventListener\BodyTooBigListener';
$classes[] = 'App\EventListener\ProfilerDisableListener';
$classes[] = 'App\EventListener\UpdateUserRolesListener';
$classes[] = 'App\Form\Type\AbstractExternalIdEntityType';
$classes[] = 'App\Form\Type\BaylorCmsType';
$classes[] = 'App\Form\Type\BootstrapFileType';
$classes[] = 'App\Form\Type\ContestExportType';
$classes[] = 'App\Form\Type\ContestImportType';
$classes[] = 'App\Form\Type\ContestProblemType';
$classes[] = 'App\Form\Type\ContestType';
$classes[] = 'App\Form\Type\ExecutableType';
$classes[] = 'App\Form\Type\ExecutableUploadType';
$classes[] = 'App\Form\Type\FinalizeContestType';
$classes[] = 'App\Form\Type\GeneratePasswordsType';
$classes[] = 'App\Form\Type\JsonImportType';
$classes[] = 'App\Form\Type\JudgehostRestrictionType';
$classes[] = 'App\Form\Type\JudgehostType';
$classes[] = 'App\Form\Type\JudgehostsType';
$classes[] = 'App\Form\Type\LanguageType';
$classes[] = 'App\Form\Type\MinimalUserType';
$classes[] = 'App\Form\Type\PrintType';
$classes[] = 'App\Form\Type\ProblemType';
$classes[] = 'App\Form\Type\ProblemUploadMultipleType';
$classes[] = 'App\Form\Type\ProblemUploadType';
$classes[] = 'App\Form\Type\RejudgingType';
$classes[] = 'App\Form\Type\RemovedIntervalType';
$classes[] = 'App\Form\Type\SubmitProblemType';
$classes[] = 'App\Form\Type\TeamAffiliationType';
$classes[] = 'App\Form\Type\TeamCategoryType';
$classes[] = 'App\Form\Type\TeamClarificationType';
$classes[] = 'App\Form\Type\TeamType';
$classes[] = 'App\Form\Type\TsvImportType';
$classes[] = 'App\Form\Type\UserRegistrationType';
$classes[] = 'App\Form\Type\UserType';
$classes[] = 'App\Logger\VarargsLogMessageProcessor';
$classes[] = 'App\Security\DOMJudgeBasicAuthenticator';
$classes[] = 'App\Security\DOMJudgeIPAuthenticator';
$classes[] = 'App\Security\DOMJudgeXHeadersAuthenticator';
$classes[] = 'App\Security\UserChecker';
$classes[] = 'App\Security\UserStateUpdater';
$classes[] = 'App\Serializer\ContestProblemVisitor';
$classes[] = 'App\Serializer\ContestVisitor';
$classes[] = 'App\Serializer\SetExternalIdVisitor';
$classes[] = 'App\Serializer\SubmissionVisitor';
$classes[] = 'App\Service\BalloonService';
$classes[] = 'App\Service\CheckConfigService';
$classes[] = 'App\Service\ConfigurationService';
$classes[] = 'App\Service\DOMJudgeService';
$classes[] = 'App\Service\EventLogService';
$classes[] = 'App\Service\ImportExportService';
$classes[] = 'App\Service\ImportProblemService';
$classes[] = 'App\Service\RejudgingService';
$classes[] = 'App\Service\ScoreboardService';
$classes[] = 'App\Service\SubmissionService';
$classes[] = 'App\Twig\TwigExtension';
$classes[] = 'App\Validator\Constraints\CountryValidator';
$classes[] = 'App\Validator\Constraints\IdentifierValidator';
$classes[] = 'App\Validator\Constraints\TimeStringValidator';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Twig\Extensions\TextExtension';
$classes[] = 'Symfony\Component\Cache\DoctrineProvider';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer';
$classes[] = 'Doctrine\Common\Annotations\CachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\AboutCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand';
$classes[] = 'Symfony\Component\Form\Command\DebugCommand';
$classes[] = 'App\Command\CheckDatabaseConfigurationDefaultValuesCommand';
$classes[] = 'App\Command\ImportEventFeedCommand';
$classes[] = 'App\Command\LoadExampleDataCommand';
$classes[] = 'App\Command\ResetUserPasswordCommand';
$classes[] = 'App\Command\ScoreboardMergeCommand';
$classes[] = 'Doctrine\Bundle\DoctrineCacheBundle\Command\ContainsCommand';
$classes[] = 'Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand';
$classes[] = 'Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand';
$classes[] = 'Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand';
$classes[] = 'Symfony\Component\Console\CommandLoader\ContainerCommandLoader';
$classes[] = 'Symfony\Component\Console\EventListener\ErrorListener';
$classes[] = 'Symfony\Bridge\Monolog\Logger';
$classes[] = 'Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'App\Doctrine\HashPasswordSubscriber';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand';
$classes[] = 'Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand';
$classes[] = 'Doctrine\Bundle\FixturesBundle\Loader\SymfonyFixturesLoader';
$classes[] = 'App\DataFixtures\ClarificationFixture';
$classes[] = 'App\DataFixtures\ContestFixture';
$classes[] = 'App\DataFixtures\ContestProblemFixture';
$classes[] = 'App\DataFixtures\ExecutableFixture';
$classes[] = 'App\DataFixtures\JudgehostFixture';
$classes[] = 'App\DataFixtures\ProblemFixture';
$classes[] = 'App\DataFixtures\TeamAffiliationFixture';
$classes[] = 'App\DataFixtures\TeamCategoryFixture';
$classes[] = 'App\DataFixtures\TeamFixture';
$classes[] = 'App\DataFixtures\TestcaseFixture';
$classes[] = 'App\DataFixtures\UserFixture';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Command\MigrationsDumpSchemaDoctrineCommand';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Command\MigrationsExecuteDoctrineCommand';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Command\MigrationsGenerateDoctrineCommand';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Command\MigrationsLatestDoctrineCommand';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Command\MigrationsMigrateDoctrineCommand';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Command\MigrationsRollupDoctrineCommand';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Command\MigrationsStatusDoctrineCommand';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Command\MigrationsUpToDateDoctrineCommand';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Command\MigrationsVersionDoctrineCommand';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'FOS\RestBundle\EventListener\BodyListener';
$classes[] = 'FOS\RestBundle\Decoder\ContainerDecoderProvider';
$classes[] = 'FOS\RestBundle\Decoder\JsonDecoder';
$classes[] = 'FOS\RestBundle\Util\ExceptionValueMap';
$classes[] = 'App\FosRestBundle\ExceptionController';
$classes[] = 'FOS\RestBundle\Controller\TwigExceptionController';
$classes[] = 'Twig\Environment';
$classes[] = 'FOS\RestBundle\EventListener\ExceptionListener';
$classes[] = 'FOS\RestBundle\Form\Extension\DisableCSRFExtension';
$classes[] = 'FOS\RestBundle\Serializer\Normalizer\ExceptionHandler';
$classes[] = 'FOS\RestBundle\Serializer\Normalizer\FormErrorHandler';
$classes[] = 'JMS\Serializer\Handler\FormErrorHandler';
$classes[] = 'FOS\RestBundle\Serializer\JMSSerializerAdapter';
$classes[] = 'FOS\RestBundle\Serializer\JMSHandlerRegistryV2';
$classes[] = 'JMS\Serializer\Handler\LazyHandlerRegistry';
$classes[] = 'FOS\RestBundle\View\ViewHandler';
$classes[] = 'FOS\RestBundle\EventListener\ViewResponseListener';
$classes[] = 'FOS\RestBundle\EventListener\ZoneMatcherListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\FragmentListener';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'Symfony\Contracts\HttpClient\HttpClientInterface';
$classes[] = 'Symfony\Component\HttpClient\HttpClient';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'JMS\Serializer\Serializer';
$classes[] = 'JMS\Serializer\GraphNavigator\Factory\DeserializationGraphNavigatorFactory';
$classes[] = 'JMS\Serializer\Accessor\DefaultAccessorStrategy';
$classes[] = 'JMS\Serializer\Expression\ExpressionEvaluator';
$classes[] = 'Symfony\Component\ExpressionLanguage\ExpressionLanguage';
$classes[] = 'JMS\SerializerBundle\ExpressionLanguage\BasicSerializerFunctionsProvider';
$classes[] = 'JMS\Serializer\EventDispatcher\LazyEventDispatcher';
$classes[] = 'JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\JsonSerializationVisitorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\JsonDeserializationVisitorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\XmlDeserializationVisitorFactory';
$classes[] = 'JMS\Serializer\Handler\ArrayCollectionHandler';
$classes[] = 'JMS\Serializer\Handler\ConstraintViolationHandler';
$classes[] = 'JMS\Serializer\Handler\DateHandler';
$classes[] = 'JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory';
$classes[] = 'JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber';
$classes[] = 'JMS\Serializer\Handler\IteratorHandler';
$classes[] = 'JMS\Serializer\Metadata\Driver\DoctrineTypeDriver';
$classes[] = 'Metadata\Driver\DriverChain';
$classes[] = 'JMS\Serializer\Metadata\Driver\YamlDriver';
$classes[] = 'Metadata\Driver\FileLocator';
$classes[] = 'JMS\Serializer\Naming\SerializedNameAnnotationStrategy';
$classes[] = 'JMS\Serializer\Naming\CamelCaseNamingStrategy';
$classes[] = 'JMS\Serializer\Metadata\Driver\XmlDriver';
$classes[] = 'JMS\Serializer\Metadata\Driver\AnnotationDriver';
$classes[] = 'Metadata\MetadataFactory';
$classes[] = 'Metadata\Driver\LazyLoadingDriver';
$classes[] = 'Metadata\Cache\FileCache';
$classes[] = 'JMS\Serializer\Construction\DoctrineObjectConstructor';
$classes[] = 'JMS\Serializer\Twig\SerializerRuntimeExtension';
$classes[] = 'JMS\Serializer\Twig\SerializerRuntimeHelper';
$classes[] = 'JMS\Serializer\Type\Parser';
$classes[] = 'JMS\Serializer\Construction\UnserializeObjectConstructor';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Bridge\Monolog\Handler\ConsoleHandler';
$classes[] = 'Monolog\Handler\StreamHandler';
$classes[] = 'Monolog\Handler\FilterHandler';
$classes[] = 'Monolog\Handler\FingersCrossedHandler';
$classes[] = 'Symfony\Bridge\Monolog\Handler\FingersCrossed\HttpCodeActivationStrategy';
$classes[] = 'Monolog\Processor\PsrLogMessageProcessor';
$classes[] = 'Nelmio\ApiDocBundle\Controller\DocumentationController';
$classes[] = 'Nelmio\ApiDocBundle\Controller\SwaggerUiController';
$classes[] = 'Nelmio\ApiDocBundle\Util\ControllerReflector';
$classes[] = 'Nelmio\ApiDocBundle\Describer\ExternalDocDescriber';
$classes[] = 'Nelmio\ApiDocBundle\Describer\DefaultDescriber';
$classes[] = 'Nelmio\ApiDocBundle\Describer\RouteDescriber';
$classes[] = 'Nelmio\ApiDocBundle\Describer\SwaggerPhpDescriber';
$classes[] = 'Nelmio\ApiDocBundle\Form\Extension\DocumentationExtension';
$classes[] = 'Nelmio\ApiDocBundle\ApiDocGenerator';
$classes[] = 'Nelmio\ApiDocBundle\ModelDescriber\FormModelDescriber';
$classes[] = 'Nelmio\ApiDocBundle\ModelDescriber\JMSModelDescriber';
$classes[] = 'Nelmio\ApiDocBundle\ModelDescriber\ObjectModelDescriber';
$classes[] = 'Nelmio\ApiDocBundle\ModelDescriber\FallbackObjectModelDescriber';
$classes[] = 'Nelmio\ApiDocBundle\PropertyDescriber\ArrayPropertyDescriber';
$classes[] = 'Nelmio\ApiDocBundle\PropertyDescriber\BooleanPropertyDescriber';
$classes[] = 'Nelmio\ApiDocBundle\PropertyDescriber\DateTimePropertyDescriber';
$classes[] = 'Nelmio\ApiDocBundle\PropertyDescriber\FloatPropertyDescriber';
$classes[] = 'Nelmio\ApiDocBundle\PropertyDescriber\IntegerPropertyDescriber';
$classes[] = 'Nelmio\ApiDocBundle\PropertyDescriber\ObjectPropertyDescriber';
$classes[] = 'Nelmio\ApiDocBundle\PropertyDescriber\StringPropertyDescriber';
$classes[] = 'Nelmio\ApiDocBundle\RouteDescriber\FosRestDescriber';
$classes[] = 'Nelmio\ApiDocBundle\RouteDescriber\PhpDocDescriber';
$classes[] = 'Nelmio\ApiDocBundle\RouteDescriber\RouteMetadataDescriber';
$classes[] = 'Symfony\Component\Routing\RouteCollection';
$classes[] = 'Nelmio\ApiDocBundle\Routing\FilteredRouteCollectionBuilder';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoCacheExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\LegacyRouteLoaderContainer';
$classes[] = 'FOS\RestBundle\Routing\Loader\DirectoryRouteLoader';
$classes[] = 'FOS\RestBundle\Routing\Loader\RestRouteProcessor';
$classes[] = 'FOS\RestBundle\Routing\Loader\RestRouteLoader';
$classes[] = 'FOS\RestBundle\Routing\Loader\Reader\RestControllerReader';
$classes[] = 'FOS\RestBundle\Routing\Loader\Reader\RestActionReader';
$classes[] = 'FOS\RestBundle\Request\ParamReader';
$classes[] = 'FOS\RestBundle\Inflector\DoctrineInflector';
$classes[] = 'FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader';
$classes[] = 'FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\ExpressionLanguage';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Guard\GuardAuthenticatorHandler';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener';
$classes[] = 'App\Security\UsernamePasswordFormAuthenticationListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler';
$classes[] = 'Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler';
$classes[] = 'Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider';
$classes[] = 'Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticationUtils';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint';
$classes[] = 'Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Encoder\EncoderFactory';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\FirewallListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint';
$classes[] = 'Symfony\Component\Security\Http\Firewall\LogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler';
$classes[] = 'Symfony\Component\Security\Http\Logout\CsrfTokenClearingLogoutHandler';
$classes[] = 'Symfony\Component\Security\Http\Logout\SessionLogoutHandler';
$classes[] = 'Symfony\Component\Security\Core\Security';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\Security\Core\Encoder\UserPasswordEncoder';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Symfony\Bridge\Twig\Command\DebugCommand';
$classes[] = 'Symfony\Bundle\TwigBundle\Command\LintCommand';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ExpressionExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer';
$classes[] = 'Symfony\Bundle\TwigBundle\TemplateIterator';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';

Preloader::preload($classes);