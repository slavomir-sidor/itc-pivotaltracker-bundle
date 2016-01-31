<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * DevDebugProjectContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class DevDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.controller' => 'getAssetic_ControllerService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter.yui_css' => 'getAssetic_Filter_YuiCssService',
            'assetic.filter.yui_js' => 'getAssetic_Filter_YuiJsService',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'assetic.request_listener' => 'getAssetic_RequestListenerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'data_collector.translation' => 'getDataCollector_TranslationService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'esi' => 'getEsiService',
            'esi_listener' => 'getEsiListenerService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'http_kernel' => 'getHttpKernelService',
            'kernel' => 'getKernelService',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.debug' => 'getMonolog_Handler_DebugService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.logger.assetic' => 'getMonolog_Logger_AsseticService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.handler' => 'getSession_HandlerService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'sk.itc.pivotaltrackerbundle.api.v5' => 'getSk_Itc_Pivotaltrackerbundle_Api_V5Service',
            'sk.itc.pivotaltrackerbundle.command.api.v5.account' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_AccountService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.account.memberships' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_Account_MembershipsService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.accounts' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_AccountsService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.accounts.summary' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_Accounts_SummaryService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.activity' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_ActivityService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.attachments' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_AttachmentsService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.comments' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_CommentsService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.epic' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_EpicService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.epics' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_EpicsService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.exports' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_ExportsService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.iterations' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_IterationsService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.labels' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_LabelsService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.me' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_MeService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.notifications' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_NotificationsService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.project' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_ProjectService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.project.history' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_Project_HistoryService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.project.integrations' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_Project_IntegrationsService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.project.memberships' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_Project_MembershipsService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.project.webhooks' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_Project_WebhooksService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.projects' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_ProjectsService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.request.aggregator' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_Request_AggregatorService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.saved.search' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_Saved_SearchService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.source.commits' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_Source_CommitsService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.stories' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_StoriesService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.story' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_StoryService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.story.tasks' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_Story_TasksService',
            'sk.itc.pivotaltrackerbundle.command.api.v5.workspaces' => 'getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_WorkspacesService',
            'sk.itc.pivotaltrackerbundle.http.client' => 'getSk_Itc_Pivotaltrackerbundle_Http_ClientService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator' => 'getTranslatorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
        );
        $this->aliases = array(
            'console.command.sk_itc_pivotaltrackerbundle_console_command_api_v5_accountactivitycommand' => 'sk.itc.pivotaltrackerbundle.command.api.v5.activity',
            'console.command.sk_itc_pivotaltrackerbundle_console_command_api_v5_accountattachmentscommand' => 'sk.itc.pivotaltrackerbundle.command.api.v5.attachments',
            'console.command.sk_itc_pivotaltrackerbundle_console_command_api_v5_accountcommand' => 'sk.itc.pivotaltrackerbundle.command.api.v5.workspaces',
            'console.command.sk_itc_pivotaltrackerbundle_console_command_api_v5_accountmembershipscommand' => 'sk.itc.pivotaltrackerbundle.command.api.v5.account.memberships',
            'console.command.sk_itc_pivotaltrackerbundle_console_command_api_v5_accountscommand' => 'sk.itc.pivotaltrackerbundle.command.api.v5.accounts',
            'console.command.sk_itc_pivotaltrackerbundle_console_command_api_v5_accountssummariescommand' => 'sk.itc.pivotaltrackerbundle.command.api.v5.accounts.summary',
            'event_dispatcher' => 'debug.event_dispatcher',
            'mailer' => 'swiftmailer.mailer.default',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /**
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader A Doctrine\Common\Annotations\CachedReader instance.
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(new \Doctrine\Common\Annotations\AnnotationReader(), new \Doctrine\Common\Cache\FilesystemCache((__DIR__.'/annotations')), true);
    }

    /**
     * Gets the 'assetic.asset_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Factory\LazyAssetManager A Assetic\Factory\LazyAssetManager instance.
     */
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('templating.loader');

        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig'), $this->get('monolog.logger.assetic', ContainerInterface::NULL_ON_INVALID_REFERENCE)), new \Assetic\Cache\ConfigCache((__DIR__.'/assetic/config')), true)));

        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', ($this->targetDirs[2].'/Resources/FrameworkBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', ($this->targetDirs[2].'/vendor/symfony/framework-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', ($this->targetDirs[2].'/Resources/SecurityBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', ($this->targetDirs[2].'/vendor/symfony/security-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', ($this->targetDirs[2].'/Resources/TwigBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', ($this->targetDirs[2].'/vendor/symfony/twig-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', ($this->targetDirs[2].'/Resources/MonologBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', ($this->targetDirs[2].'/vendor/symfony/monolog-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SwiftmailerBundle', ($this->targetDirs[2].'/Resources/SwiftmailerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SwiftmailerBundle', ($this->targetDirs[2].'/vendor/symfony/swiftmailer-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', ($this->targetDirs[2].'/Resources/AsseticBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', ($this->targetDirs[2].'/vendor/symfony/assetic-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'PivotalTrackerBundle', ($this->targetDirs[2].'/Resources/PivotalTrackerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'PivotalTrackerBundle', ($this->targetDirs[2].'/src/SK/ITC/PivotalTrackerBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', ($this->targetDirs[2].'/Resources/views'), '/\\.[^.]+\\.twig$/'), 'twig');

        return $instance;
    }

    /**
     * Gets the 'assetic.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\AsseticBundle\Controller\AsseticController A Symfony\Bundle\AsseticBundle\Controller\AsseticController instance.
     */
    protected function getAssetic_ControllerService()
    {
        return $this->services['assetic.controller'] = new \Symfony\Bundle\AsseticBundle\Controller\AsseticController($this->get('assetic.asset_manager'), new \Assetic\Cache\FilesystemCache((__DIR__.'/assetic/assets')), false, $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'assetic.filter.cssrewrite' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\CssRewriteFilter A Assetic\Filter\CssRewriteFilter instance.
     */
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }

    /**
     * Gets the 'assetic.filter.yui_css' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\Yui\CssCompressorFilter A Assetic\Filter\Yui\CssCompressorFilter instance.
     */
    protected function getAssetic_Filter_YuiCssService()
    {
        $this->services['assetic.filter.yui_css'] = $instance = new \Assetic\Filter\Yui\CssCompressorFilter(($this->targetDirs[2].'/../vendor/packagist/yuicompressor-bin/bin/yuicompressor.jar'), 'java');

        $instance->setCharset('UTF-8');
        $instance->setTimeout(NULL);
        $instance->setStackSize(NULL);
        $instance->setLineBreak(NULL);

        return $instance;
    }

    /**
     * Gets the 'assetic.filter.yui_js' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\Yui\JsCompressorFilter A Assetic\Filter\Yui\JsCompressorFilter instance.
     */
    protected function getAssetic_Filter_YuiJsService()
    {
        $this->services['assetic.filter.yui_js'] = $instance = new \Assetic\Filter\Yui\JsCompressorFilter(($this->targetDirs[2].'/../vendor/packagist/yuicompressor-bin/bin/yuicompressor.jar'), 'java');

        $instance->setCharset('UTF-8');
        $instance->setTimeout(NULL);
        $instance->setStackSize(NULL);
        $instance->setNomunge(NULL);
        $instance->setPreserveSemi(NULL);
        $instance->setDisableOptimizations(NULL);
        $instance->setLineBreak(NULL);

        return $instance;
    }

    /**
     * Gets the 'assetic.filter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\AsseticBundle\FilterManager A Symfony\Bundle\AsseticBundle\FilterManager instance.
     */
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite', 'yui_js' => 'assetic.filter.yui_js', 'yui_css' => 'assetic.filter.yui_css'));
    }

    /**
     * Gets the 'assetic.request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\AsseticBundle\EventListener\RequestListener A Symfony\Bundle\AsseticBundle\EventListener\RequestListener instance.
     */
    protected function getAssetic_RequestListenerService()
    {
        return $this->services['assetic.request_listener'] = new \Symfony\Bundle\AsseticBundle\EventListener\RequestListener();
    }

    /**
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance.
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }

    /**
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance.
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[2].'/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => $this->get('kernel.class_cache.cache_warmer'), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer($this->get('translator.default')), 4 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 5 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c, array()), 6 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this->get('twig'), new \Symfony\Bundle\TwigBundle\TemplateIterator($a, $this->targetDirs[2], array()))));
    }

    /**
     * Gets the 'config_cache_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory A Symfony\Component\Config\ResourceCheckerConfigCacheFactory instance.
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(array(0 => new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
    }

    /**
     * Gets the 'data_collector.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector A Symfony\Component\HttpKernel\DataCollector\RequestDataCollector instance.
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the 'data_collector.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector instance.
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the 'data_collector.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\DataCollector\TranslationDataCollector A Symfony\Component\Translation\DataCollector\TranslationDataCollector instance.
     */
    protected function getDataCollector_TranslationService()
    {
        return $this->services['data_collector.translation'] = new \Symfony\Component\Translation\DataCollector\TranslationDataCollector($this->get('translator'));
    }

    /**
     * Gets the 'debug.controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver A Symfony\Component\HttpKernel\Controller\TraceableControllerResolver instance.
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the 'debug.debug_handlers_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener A Symfony\Component\HttpKernel\EventListener\DebugHandlersListener instance.
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL, NULL, true, NULL);
    }

    /**
     * Gets the 'debug.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher A Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher instance.
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), $this->get('debug.stopwatch'), $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->addListenerService('kernel.controller', array(0 => 'data_collector.router', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'assetic.request_listener', 1 => 'onKernelRequest'), 0);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('translator_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('esi_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SurrogateListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('profiler_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener');
        $instance->addSubscriberService('data_collector.request', 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
        $instance->addSubscriberService('monolog.handler.console', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');

        return $instance;
    }

    /**
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance.
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the 'esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\HttpCache\Esi A Symfony\Component\HttpKernel\HttpCache\Esi instance.
     */
    protected function getEsiService()
    {
        return $this->services['esi'] = new \Symfony\Component\HttpKernel\HttpCache\Esi();
    }

    /**
     * Gets the 'esi_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SurrogateListener A Symfony\Component\HttpKernel\EventListener\SurrogateListener instance.
     */
    protected function getEsiListenerService()
    {
        return $this->services['esi_listener'] = new \Symfony\Component\HttpKernel\EventListener\SurrogateListener($this->get('esi', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance.
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[2].'/Resources'));
    }

    /**
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance.
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the 'fragment.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler A Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler instance.
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler($this, $this->get('request_stack'), true);

        $instance->addRendererService('inline', 'fragment.renderer.inline');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('esi', 'fragment.renderer.esi');
        $instance->addRendererService('ssi', 'fragment.renderer.ssi');

        return $instance;
    }

    /**
     * Gets the 'fragment.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener A Symfony\Component\HttpKernel\EventListener\FragmentListener instance.
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '_fragments');
    }

    /**
     * Gets the 'fragment.renderer.esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer instance.
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer($this->get('esi', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('_fragments');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.hinclude' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer A Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer instance.
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer($this->get('twig'), $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('_fragments');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer A Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer instance.
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('debug.event_dispatcher'));

        $instance->setFragmentPath('_fragments');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.ssi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer instance.
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('_fragments');

        return $instance;
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel A Symfony\Component\HttpKernel\HttpKernel instance.
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel($this->get('debug.event_dispatcher'), $this->get('debug.controller_resolver'), $this->get('request_stack'), false);
    }

    /**
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'kernel.class_cache.cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer A Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer instance.
     */
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer();
    }

    /**
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance.
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener($this->get('request_stack'), 'cs', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.handler.console' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler A Symfony\Bridge\Monolog\Handler\ConsoleHandler instance.
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());
    }

    /**
     * Gets the 'monolog.handler.debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\DebugHandler A Symfony\Bridge\Monolog\Handler\DebugHandler instance.
     */
    protected function getMonolog_Handler_DebugService()
    {
        return $this->services['monolog.handler.debug'] = new \Symfony\Bridge\Monolog\Handler\DebugHandler(100, true);
    }

    /**
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\RotatingFileHandler A Monolog\Handler\RotatingFileHandler instance.
     */
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\RotatingFileHandler(($this->targetDirs[2].'/logs/dev.log'), 256, 100, true, NULL);
    }

    /**
     * Gets the 'monolog.logger.assetic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_AsseticService()
    {
        $this->services['monolog.logger.assetic'] = $instance = new \Symfony\Bridge\Monolog\Logger('assetic');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler A Symfony\Component\HttpKernel\Profiler\Profiler instance.
     */
    protected function getProfilerService()
    {
        $a = $this->get('monolog.logger.profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $c = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $c->setKernel($b);
        }

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.__DIR__.'/profiler')), $a);

        $instance->add($this->get('data_collector.request'));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector($this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add($this->get('data_collector.router'));
        $instance->add($this->get('data_collector.translation'));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector($this->get('twig.profile')));
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add($c);

        return $instance;
    }

    /**
     * Gets the 'profiler_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener A Symfony\Component\HttpKernel\EventListener\ProfilerListener instance.
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener($this->get('profiler'), $this->get('request_stack'), NULL, false, false);
    }

    /**
     * Gets the 'property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor A Symfony\Component\PropertyAccess\PropertyAccessor instance.
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false);
    }

    /**
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance.
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance.
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router A Symfony\Bundle\FrameworkBundle\Routing\Router instance.
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, (__DIR__.'/assetic/routing.yml'), array('cache_dir' => __DIR__, 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'DevUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'DevUrlMatcher', 'strict_requirements' => true, 'resource_type' => 'yaml'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));

        return $instance;
    }

    /**
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance.
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('request_stack'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance.
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');

        $b = new \Symfony\Component\Config\Loader\LoaderResolver();
        $b->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $b->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $b->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $b->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($a));
        $b->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
        $b->addLoader(new \Symfony\Bundle\AsseticBundle\Routing\AsseticLoader($this->get('assetic.asset_manager'), array()));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $b);
    }

    /**
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance.
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the 'session.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler A Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler instance.
     */
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler((__DIR__.'/sessions'));
    }

    /**
     * Gets the 'session.save_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener A Symfony\Component\HttpKernel\EventListener\SaveSessionListener instance.
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance.
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance.
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('cookie_httponly' => true, 'gc_probability' => 1), $this->get('session.handler'), $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.php_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage instance.
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage($this->get('session.handler'), $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener A Symfony\Bundle\FrameworkBundle\EventListener\SessionListener instance.
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.api.v5' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\API\V5 A SK\ITC\PivotalTrackerBundle\API\V5 instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Api_V5Service()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.api.v5'] = new \SK\ITC\PivotalTrackerBundle\API\V5('6e52166cfafb1e3609d1e08d604f09a7', $this->get('sk.itc.pivotaltrackerbundle.http.client'), $this->get('logger'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.account' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_AccountService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.account'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand('itc:pt:account', 'ITCloud Pivotal Tracker API v5 Account', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.account.memberships' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountMembershipsCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountMembershipsCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_Account_MembershipsService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.account.memberships'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountMembershipsCommand('itc:pt:account-memberships', 'ITCloud Pivotal Tracker API v5 Account Memberships', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.accounts' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountsCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountsCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_AccountsService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.accounts'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountsCommand('itc:pt:accounts', 'ITCloud Pivotal Tracker API v5 Accounts', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.accounts.summary' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountsSummariesCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountsSummariesCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_Accounts_SummaryService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.accounts.summary'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountsSummariesCommand('itc:pt:accounts-summary', 'ITCloud Pivotal Tracker API v5 Accounts', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.activity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountActivityCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountActivityCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_ActivityService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.activity'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountActivityCommand('itc:pt:activity', 'ITCloud Pivotal Tracker API v5 Activity', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.attachments' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountAttachmentsCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountAttachmentsCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_AttachmentsService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.attachments'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountAttachmentsCommand('itc:pt:attachments', 'ITCloud Pivotal Tracker API v5 Attachments', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.comments' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_CommentsService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.comments'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand('itc:pt:comments', 'ITCloud Pivotal Tracker API v5 Comments', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.epic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_EpicService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.epic'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand('itc:pt:epic', 'ITCloud Pivotal Tracker API v5 Epic', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.epics' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_EpicsService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.epics'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand('itc:pt:epics', 'ITCloud Pivotal Tracker API v5 Epics', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.exports' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_ExportsService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.exports'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand('itc:pt:exports', 'ITCloud Pivotal Tracker API v5 Exports', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.iterations' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_IterationsService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.iterations'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand('itc:pt:iterations', 'ITCloud Pivotal Tracker API v5 Iterations', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.labels' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_LabelsService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.labels'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand('itc:pt:labels', 'ITCloud Pivotal Tracker API v5 Labels', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.me' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_MeService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.me'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand('itc:pt:me', 'ITCloud Pivotal Tracker API v5 Me', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.notifications' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_NotificationsService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.notifications'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand('itc:pt:notifications', 'ITCloud Pivotal Tracker API v5 Notifications', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.project' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_ProjectService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.project'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand('itc:pt:project', 'ITCloud Pivotal Tracker API v5 Project', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.project.history' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_Project_HistoryService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.project.history'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand('itc:pt:project-history', 'ITCloud Pivotal Tracker API v5 Project History', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.project.integrations' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_Project_IntegrationsService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.project.integrations'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand('itc:pt:project-integrations', 'ITCloud Pivotal Tracker API v5 Project Integrations', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.project.memberships' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_Project_MembershipsService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.project.memberships'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand('itc:pt:project-memberships', 'ITCloud Pivotal Tracker API v5 Project Project Memberships', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.project.webhooks' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_Project_WebhooksService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.project.webhooks'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand('itc:pt:project-webhooks', 'ITCloud Pivotal Tracker API v5 Project Project Webhooks', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.projects' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_ProjectsService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.projects'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand('itc:pt:projects', 'ITCloud Pivotal Tracker API v5 Projects', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.request.aggregator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_Request_AggregatorService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.request.aggregator'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand('itc:pt:request-aggregator', 'ITCloud Pivotal Tracker API v5 Request Aggregator', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.saved.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_Saved_SearchService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.saved.search'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand('itc:pt:saved-search', 'ITCloud Pivotal Tracker API v5 Saved Search', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.source.commits' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_Source_CommitsService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.source.commits'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand('itc:pt:source-commits', 'ITCloud Pivotal Tracker API v5 Source Commits', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.stories' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_StoriesService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.stories'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand('itc:pt:stories', 'ITCloud Pivotal Tracker API v5 Stories', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.story' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_StoryService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.story'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand('itc:pt:story', 'ITCloud Pivotal Tracker API v5 Story', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.story.tasks' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_Story_TasksService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.story.tasks'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand('itc:pt:story-tasks', 'ITCloud Pivotal Tracker API v5 Story Tasks', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.command.api.v5.workspaces' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand A SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Command_Api_V5_WorkspacesService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.command.api.v5.workspaces'] = new \SK\ITC\PivotalTrackerBundle\Console\Command\API\V5\AccountCommand('itc:pt:workspaces', 'ITCloud Pivotal Tracker API v5 Story Workspaces', $this->get('logger'), $this->get('sk.itc.pivotaltrackerbundle.api.v5'));
    }

    /**
     * Gets the 'sk.itc.pivotaltrackerbundle.http.client' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Guzzle\Http\Client A Guzzle\Http\Client instance.
     */
    protected function getSk_Itc_Pivotaltrackerbundle_Http_ClientService()
    {
        return $this->services['sk.itc.pivotaltrackerbundle.http.client'] = new \Guzzle\Http\Client('https://www.pivotaltracker.com/');
    }

    /**
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance.
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the 'swiftmailer.email_sender.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener A Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener instance.
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'swiftmailer.mailer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Mailer A Swift_Mailer instance.
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /**
     * Gets the 'swiftmailer.mailer.default.plugin.messagelogger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Plugins_MessageLogger A Swift_Plugins_MessageLogger instance.
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance.
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername(NULL);
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), new \Swift_Events_SimpleEventDispatcher());

        $instance->setHost('localhost');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        $instance->registerPlugin($this->get('swiftmailer.mailer.default.plugin.messagelogger'));

        return $instance;
    }

    /**
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine A Symfony\Bundle\TwigBundle\TwigEngine instance.
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance.
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance.
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance.
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'translation.dumper.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper A Symfony\Component\Translation\Dumper\CsvFileDumper instance.
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the 'translation.dumper.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper A Symfony\Component\Translation\Dumper\IniFileDumper instance.
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the 'translation.dumper.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper A Symfony\Component\Translation\Dumper\JsonFileDumper instance.
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /**
     * Gets the 'translation.dumper.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper A Symfony\Component\Translation\Dumper\MoFileDumper instance.
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper A Symfony\Component\Translation\Dumper\PhpFileDumper instance.
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the 'translation.dumper.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper A Symfony\Component\Translation\Dumper\PoFileDumper instance.
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper A Symfony\Component\Translation\Dumper\QtFileDumper instance.
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the 'translation.dumper.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper A Symfony\Component\Translation\Dumper\IcuResFileDumper instance.
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the 'translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper A Symfony\Component\Translation\Dumper\XliffFileDumper instance.
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the 'translation.dumper.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper A Symfony\Component\Translation\Dumper\YamlFileDumper instance.
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the 'translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor A Symfony\Component\Translation\Extractor\ChainExtractor instance.
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /**
     * Gets the 'translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor A Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor instance.
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /**
     * Gets the 'translation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader A Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader instance.
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /**
     * Gets the 'translation.loader.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader A Symfony\Component\Translation\Loader\CsvFileLoader instance.
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the 'translation.loader.dat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader A Symfony\Component\Translation\Loader\IcuDatFileLoader instance.
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the 'translation.loader.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader A Symfony\Component\Translation\Loader\IniFileLoader instance.
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the 'translation.loader.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader A Symfony\Component\Translation\Loader\JsonFileLoader instance.
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the 'translation.loader.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader A Symfony\Component\Translation\Loader\MoFileLoader instance.
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance.
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the 'translation.loader.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader A Symfony\Component\Translation\Loader\PoFileLoader instance.
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the 'translation.loader.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader A Symfony\Component\Translation\Loader\QtFileLoader instance.
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the 'translation.loader.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance.
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance.
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance.
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the 'translation.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter A Symfony\Component\Translation\Writer\TranslationWriter instance.
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /**
     * Gets the 'translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator A Symfony\Component\Translation\DataCollectorTranslator instance.
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator(new \Symfony\Component\Translation\LoggingTranslator($this->get('translator.default'), $this->get('monolog.logger.translation')));
    }

    /**
     * Gets the 'translator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator A Symfony\Bundle\FrameworkBundle\Translation\Translator instance.
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => true, 'resource_files' => array('nb' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.nb.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.nb.xlf')), 'lb' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.lb.xlf')), 'az' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.az.xlf')), 'vi' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.vi.xlf')), 'cy' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.cy.xlf')), 'da' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.da.xlf')), 'zh_TW' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf')), 'el' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.el.xlf')), 'lt' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.lt.xlf')), 'pl' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.pl.xlf')), 'th' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.th.xlf')), 'sq' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.sq.xlf')), 'de' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.de.xlf')), 'ja' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.ja.xlf')), 'ru' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.ru.xlf')), 'sr_Latn' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.sr_Latn.xlf')), 'no' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.no.xlf')), 'af' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.af.xlf')), 'he' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.he.xlf')), 'cs' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.cs.xlf')), 'es' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.es.xlf')), 'hr' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.hr.xlf')), 'gl' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.gl.xlf')), 'et' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.et.xlf')), 'pt' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.pt.xlf')), 'fr' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[2].'/src/SK/ITC/PivotalTrackerBundle/Resources/translations/messages.fr.xlf')), 'bg' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.bg.xlf')), 'tr' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.tr.xlf')), 'ro' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.ro.xlf')), 'ar' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.ar.xlf')), 'hu' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.hu.xlf')), 'ca' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.ca.xlf')), 'sr_Cyrl' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.sr_Cyrl.xlf')), 'sk' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.sk.xlf')), 'nl' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.nl.xlf')), 'mn' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.mn.xlf')), 'uk' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.uk.xlf')), 'fi' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.fi.xlf')), 'sl' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.sl.xlf')), 'eu' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.eu.xlf')), 'it' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.it.xlf')), 'pt_BR' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.pt_BR.xlf')), 'fa' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.fa.xlf')), 'id' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.id.xlf')), 'sv' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.sv.xlf')), 'en' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.en.xlf')), 'zh_CN' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.zh_CN.xlf')), 'hy' => array(0 => ($this->targetDirs[2].'/vendor/symfony/validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.hy.xlf')), 'lv' => array(0 => ($this->targetDirs[2].'/vendor/symfony/form/Resources/translations/validators.lv.xlf')), 'pt_PT' => array(0 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[2].'/vendor/symfony/security/Core/Exception/../Resources/translations/security.ua.xlf')))), array());

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));
        $instance->setFallbackLocales(array(0 => 'en'));

        return $instance;
    }

    /**
     * Gets the 'translator_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener A Symfony\Component\HttpKernel\EventListener\TranslatorListener instance.
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener($this->get('translator'), $this->get('request_stack'));
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Environment A Twig_Environment instance.
     */
    protected function getTwigService()
    {
        $a = $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('request_stack');

        $c = new \Symfony\Bridge\Twig\AppVariable();
        $c->setEnvironment('dev');
        $c->setDebug(true);
        if ($this->has('request_stack')) {
            $c->setRequestStack($b);
        }

        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => array(0 => 'form_div_layout.html.twig'), 'autoescape' => 'filename', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), true, array(), array(0 => 'FrameworkBundle', 1 => 'SecurityBundle', 2 => 'TwigBundle', 3 => 'MonologBundle', 4 => 'SwiftmailerBundle', 5 => 'AsseticBundle', 6 => 'PivotalTrackerBundle'), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension($this->get('twig.profile'), $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, $this->targetDirs[2], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($this->get('fragment.handler')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($b));
        $instance->addExtension(new \Twig_Extension_Debug());
        $instance->addGlobal('app', $c);
        call_user_func(array(new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','), 'configure'), $instance);

        return $instance;
    }

    /**
     * Gets the 'twig.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController A Symfony\Bundle\TwigBundle\Controller\ExceptionController instance.
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), true);
    }

    /**
     * Gets the 'twig.controller.preview_error' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController A Symfony\Bundle\TwigBundle\Controller\PreviewErrorController instance.
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController($this->get('http_kernel'), 'twig.controller.exception:showAction');
    }

    /**
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance.
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance.
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));

        $instance->addPath(($this->targetDirs[2].'/vendor/symfony/framework-bundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[2].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[2].'/vendor/symfony/security-bundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[2].'/vendor/symfony/twig-bundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[2].'/src/SK/ITC/PivotalTrackerBundle/Resources/views'), 'PivotalTracker');

        return $instance;
    }

    /**
     * Gets the 'twig.profile' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Profiler_Profile A Twig_Profiler_Profile instance.
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig_Profiler_Profile();
    }

    /**
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance.
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /**
     * Gets the 'uri_signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner A Symfony\Component\HttpKernel\UriSigner instance.
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ITC Pivotal Tracker IS REALLY SECURE Bundle!');
    }

    /**
     * Gets the 'assetic.asset_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\AsseticBundle\Factory\AssetFactory A Symfony\Bundle\AsseticBundle\Factory\AssetFactory instance.
     */
    protected function getAssetic_AssetFactoryService()
    {
        $this->services['assetic.asset_factory'] = $instance = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), ($this->targetDirs[2].'/../web'), true);

        $instance->addWorker(new \Symfony\Bundle\AsseticBundle\Factory\Worker\UseControllerWorker());

        return $instance;
    }

    /**
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance.
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance.
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the 'session.storage.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag A Symfony\Component\HttpFoundation\Session\Storage\MetadataBag instance.
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance.
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), __DIR__);
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => $this->targetDirs[2],
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => '',
            'kernel.cache_dir' => __DIR__,
            'kernel.logs_dir' => ($this->targetDirs[2].'/logs'),
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'PivotalTrackerBundle' => 'SK\\ITC\\PivotalTrackerBundle\\PivotalTrackerBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'DevDebugProjectContainer',
            'sk.itc.pivotaltrackerbundle.command.api.v5.account.name' => 'itc:pt:account',
            'sk.itc.pivotaltrackerbundle.command.api.v5.account.description' => 'ITCloud Pivotal Tracker API v5 Account',
            'sk.itc.pivotaltrackerbundle.command.api.v5.account.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.accounts.name' => 'itc:pt:accounts',
            'sk.itc.pivotaltrackerbundle.command.api.v5.accounts.description' => 'ITCloud Pivotal Tracker API v5 Accounts',
            'sk.itc.pivotaltrackerbundle.command.api.v5.accounts.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountsCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.accounts.summary.name' => 'itc:pt:accounts-summary',
            'sk.itc.pivotaltrackerbundle.command.api.v5.accounts.summary.description' => 'ITCloud Pivotal Tracker API v5 Accounts',
            'sk.itc.pivotaltrackerbundle.command.api.v5.accounts.summary.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountsSummariesCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.account.memberships.name' => 'itc:pt:account-memberships',
            'sk.itc.pivotaltrackerbundle.command.api.v5.account.memberships.description' => 'ITCloud Pivotal Tracker API v5 Account Memberships',
            'sk.itc.pivotaltrackerbundle.command.api.v5.account.memberships.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountMembershipsCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.activity.name' => 'itc:pt:activity',
            'sk.itc.pivotaltrackerbundle.command.api.v5.activity.description' => 'ITCloud Pivotal Tracker API v5 Activity',
            'sk.itc.pivotaltrackerbundle.command.api.v5.activity.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountActivityCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.attachments.name' => 'itc:pt:attachments',
            'sk.itc.pivotaltrackerbundle.command.api.v5.attachments.description' => 'ITCloud Pivotal Tracker API v5 Attachments',
            'sk.itc.pivotaltrackerbundle.command.api.v5.attachments.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountAttachmentsCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.comments.name' => 'itc:pt:comments',
            'sk.itc.pivotaltrackerbundle.command.api.v5.comments.description' => 'ITCloud Pivotal Tracker API v5 Comments',
            'sk.itc.pivotaltrackerbundle.command.api.v5.comments.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.epic.name' => 'itc:pt:epic',
            'sk.itc.pivotaltrackerbundle.command.api.v5.epic.description' => 'ITCloud Pivotal Tracker API v5 Epic',
            'sk.itc.pivotaltrackerbundle.command.api.v5.epic.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.epics.name' => 'itc:pt:epics',
            'sk.itc.pivotaltrackerbundle.command.api.v5.epics.description' => 'ITCloud Pivotal Tracker API v5 Epics',
            'sk.itc.pivotaltrackerbundle.command.api.v5.epics.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.exports.name' => 'itc:pt:exports',
            'sk.itc.pivotaltrackerbundle.command.api.v5.exports.description' => 'ITCloud Pivotal Tracker API v5 Exports',
            'sk.itc.pivotaltrackerbundle.command.api.v5.exports.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.iterations.name' => 'itc:pt:iterations',
            'sk.itc.pivotaltrackerbundle.command.api.v5.iterations.description' => 'ITCloud Pivotal Tracker API v5 Iterations',
            'sk.itc.pivotaltrackerbundle.command.api.v5.iterations.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.labels.name' => 'itc:pt:labels',
            'sk.itc.pivotaltrackerbundle.command.api.v5.labels.description' => 'ITCloud Pivotal Tracker API v5 Labels',
            'sk.itc.pivotaltrackerbundle.command.api.v5.labels.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.me.name' => 'itc:pt:me',
            'sk.itc.pivotaltrackerbundle.command.api.v5.me.description' => 'ITCloud Pivotal Tracker API v5 Me',
            'sk.itc.pivotaltrackerbundle.command.api.v5.me.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.notifications.name' => 'itc:pt:notifications',
            'sk.itc.pivotaltrackerbundle.command.api.v5.notifications.description' => 'ITCloud Pivotal Tracker API v5 Notifications',
            'sk.itc.pivotaltrackerbundle.command.api.v5.notifications.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.project.name' => 'itc:pt:project',
            'sk.itc.pivotaltrackerbundle.command.api.v5.project.description' => 'ITCloud Pivotal Tracker API v5 Project',
            'sk.itc.pivotaltrackerbundle.command.api.v5.project.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.project.history.name' => 'itc:pt:project-history',
            'sk.itc.pivotaltrackerbundle.command.api.v5.project.history.description' => 'ITCloud Pivotal Tracker API v5 Project History',
            'sk.itc.pivotaltrackerbundle.command.api.v5.project.history.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.project.integrations.name' => 'itc:pt:project-integrations',
            'sk.itc.pivotaltrackerbundle.command.api.v5.project.integrations.description' => 'ITCloud Pivotal Tracker API v5 Project Integrations',
            'sk.itc.pivotaltrackerbundle.command.api.v5.project.integrations.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.project.memberships.name' => 'itc:pt:project-memberships',
            'sk.itc.pivotaltrackerbundle.command.api.v5.project.memberships.description' => 'ITCloud Pivotal Tracker API v5 Project Project Memberships',
            'sk.itc.pivotaltrackerbundle.command.api.v5.project.memberships.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.project.webhooks.name' => 'itc:pt:project-webhooks',
            'sk.itc.pivotaltrackerbundle.command.api.v5.project.webhooks.description' => 'ITCloud Pivotal Tracker API v5 Project Project Webhooks',
            'sk.itc.pivotaltrackerbundle.command.api.v5.project.webhooks.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.projects.name' => 'itc:pt:projects',
            'sk.itc.pivotaltrackerbundle.command.api.v5.projects.description' => 'ITCloud Pivotal Tracker API v5 Projects',
            'sk.itc.pivotaltrackerbundle.command.api.v5.projects.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.request.aggregator.name' => 'itc:pt:request-aggregator',
            'sk.itc.pivotaltrackerbundle.command.api.v5.request.aggregator.description' => 'ITCloud Pivotal Tracker API v5 Request Aggregator',
            'sk.itc.pivotaltrackerbundle.command.api.v5.request.aggregator.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.saved.search.name' => 'itc:pt:saved-search',
            'sk.itc.pivotaltrackerbundle.command.api.v5.saved.search.description' => 'ITCloud Pivotal Tracker API v5 Saved Search',
            'sk.itc.pivotaltrackerbundle.command.api.v5.saved.search.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.source.commits.name' => 'itc:pt:source-commits',
            'sk.itc.pivotaltrackerbundle.command.api.v5.source.commits.description' => 'ITCloud Pivotal Tracker API v5 Source Commits',
            'sk.itc.pivotaltrackerbundle.command.api.v5.source.commits.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.stories.name' => 'itc:pt:stories',
            'sk.itc.pivotaltrackerbundle.command.api.v5.stories.description' => 'ITCloud Pivotal Tracker API v5 Stories',
            'sk.itc.pivotaltrackerbundle.command.api.v5.stories.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.story.name' => 'itc:pt:story',
            'sk.itc.pivotaltrackerbundle.command.api.v5.story.description' => 'ITCloud Pivotal Tracker API v5 Story',
            'sk.itc.pivotaltrackerbundle.command.api.v5.story.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.story.tasks.name' => 'itc:pt:story-tasks',
            'sk.itc.pivotaltrackerbundle.command.api.v5.story.tasks.description' => 'ITCloud Pivotal Tracker API v5 Story Tasks',
            'sk.itc.pivotaltrackerbundle.command.api.v5.story.tasks.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountCommand',
            'sk.itc.pivotaltrackerbundle.command.api.v5.workspaces.name' => 'itc:pt:workspaces',
            'sk.itc.pivotaltrackerbundle.command.api.v5.workspaces.description' => 'ITCloud Pivotal Tracker API v5 Story Workspaces',
            'sk.itc.pivotaltrackerbundle.command.api.v5.workspaces.class' => 'SK\\ITC\\PivotalTrackerBundle\\Console\\Command\\API\\V5\\AccountCommand',
            'kernel.secret' => 'ITC Pivotal Tracker IS REALLY SECURE Bundle!',
            'framework.http_method_override' => true,
            'framework.default_locale' => 'cs',
            'framework.secret' => 'ITC Pivotal Tracker IS REALLY SECURE Bundle!',
            'framework.trusted_proxies' => '192.0.0.1, 10.0.0.0/8',
            'framework.test' => false,
            'framework.fragments.enabled' => true,
            'framework.fragments.path' => '_fragments',
            'framework.router.resource' => ($this->targetDirs[2].'/src/SK/ITC/ORMBundle/Resources/config/routing.xml'),
            'framework.router.http_port' => 80,
            'framework.router.https_port' => 443,
            'framework.validation.enable_annotations' => true,
            'framework.annotations.cache' => 'file',
            'framework.annotations.debug' => true,
            'framework.annotations.file_cache_dir' => (__DIR__.'/annotations'),
            'framework.csfr_protection.enabled' => true,
            'framework.csfr_protection.field_name' => 'csfr-protection',
            'framework.profiler.enabled' => true,
            'framework.esi.enabled' => true,
            'framework.translator.fallback' => 'en',
            'framework.translator.locales' => 'cs|en|fr|de',
            'framework.translator.enabled' => true,
            'framework.session.save_path' => (__DIR__.'/sessions'),
            'monolog.logger.main.name' => 'main',
            'monolog.logger.main.type' => 'rotating_file',
            'monolog.logger.main.path' => ($this->targetDirs[2].'/logs/dev.log'),
            'monolog.logger.main.level' => 'debug',
            'monolog.logger.main.max_files' => 256,
            'monolog.logger.main.handler' => 'nested',
            'monolog.logger.console.name' => 'console',
            'monolog.logger.console.type' => 'console',
            'monolog.logger.console.level' => 'DEBUG',
            'jms_security_extra' => array(
                'secure_all_services' => false,
                'expressions' => true,
            ),
            'assetic.debug' => true,
            'assetic.charset' => 'UTF-8',
            'assetic.use_controller' => true,
            'assetic.read_from' => ($this->targetDirs[2].'/../web'),
            'assetic.write_to' => ($this->targetDirs[2].'/../web'),
            'assetic.java' => 'java',
            'assetic.dump_on_warmup' => true,
            'assetic.filter.yui_js.jar' => ($this->targetDirs[2].'/../vendor/packagist/yuicompressor-bin/bin/yuicompressor.jar'),
            'assetic.filter.yui_css.jar' => ($this->targetDirs[2].'/../vendor/packagist/yuicompressor-bin/bin/yuicompressor.jar'),
            'twig.auto_reload' => true,
            'twig.autoescape' => true,
            'twig.cache' => (__DIR__.'/twig'),
            'twig.charset' => 'UTF-8',
            'twig.debug' => true,
            'twig.base_template_class' => 'Twig_Template',
            'twig.strict_variables' => true,
            'framework.form.enabled' => true,
            'framework.form.csfr_protection.enabled' => true,
            'framework.templating.engines' => 'twig',
            'sk.itc.pivotaltrackerbundle' => array(
                'api.v5.header' => array(
                    'X-Tracker-Project-Version' => '',
                    'X-Tracker-Downtime-Start' => '',
                    'X-Tracker-Downtime-Finish' => '',
                    'X-Tracker-Deprecation-Warning' => '',
                    'X-Tracker-Pagination-Limit' => '',
                    'X-Tracker-Pagination-Offset' => '',
                    'X-Tracker-Pagination-Total' => '',
                    'X-Tracker-Pagination-Returned' => '',
                ),
            ),
            'sk.itc.pivotaltrackerbundle.http.client.class' => 'Guzzle\\Http\\Client',
            'sk.itc.pivotaltrackerbundle.http.client.url' => 'https://www.pivotaltracker.com/',
            'sk.itc.pivotaltrackerbundle.api.v5.class' => 'SK\\ITC\\PivotalTrackerBundle\\API\\V5',
            'sk.itc.pivotaltrackerbundle.api.v5.token' => '6e52166cfafb1e3609d1e08d604f09a7',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '_fragments',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(
                0 => '192.0.0.1',
                1 => '10.0.0.0/8',
            ),
            'kernel.default_locale' => 'cs',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.save_path' => (__DIR__.'/sessions'),
            'session.metadata.update_threshold' => '0',
            'templating.helper.code.file_link_format' => NULL,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'translator.logging' => true,
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => ('file:'.__DIR__.'/profiler'),
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'DevUrlMatcher',
            'router.options.generator.cache_class' => 'DevUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => (__DIR__.'/assetic/routing.yml'),
            'router.cache_class_prefix' => 'Dev',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'debug.error_handler.throw_at' => -1,
            'debug.container.dump' => (__DIR__.'/DevDebugProjectContainer.xml'),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.gelfphp.publisher.class' => 'Gelf\\Publisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.console.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.syslogudp.class' => 'Monolog\\Handler\\SyslogUdpHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.rollbar.class' => 'Monolog\\Handler\\RollbarHandler',
            'monolog.handler.flowdock.class' => 'Monolog\\Handler\\FlowdockHandler',
            'monolog.handler.browser_console.class' => 'Monolog\\Handler\\BrowserConsoleHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Symfony\\Bridge\\Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.newrelic.class' => 'Monolog\\Handler\\NewRelicHandler',
            'monolog.handler.hipchat.class' => 'Monolog\\Handler\\HipChatHandler',
            'monolog.handler.slack.class' => 'Monolog\\Handler\\SlackHandler',
            'monolog.handler.cube.class' => 'Monolog\\Handler\\CubeHandler',
            'monolog.handler.amqp.class' => 'Monolog\\Handler\\AmqpHandler',
            'monolog.handler.error_log.class' => 'Monolog\\Handler\\ErrorLogHandler',
            'monolog.handler.loggly.class' => 'Monolog\\Handler\\LogglyHandler',
            'monolog.handler.logentries.class' => 'Monolog\\Handler\\LogEntriesHandler',
            'monolog.handler.whatfailuregroup.class' => 'Monolog\\Handler\\WhatFailureGroupHandler',
            'monolog.activation_strategy.not_found.class' => 'Symfony\\Bundle\\MonologBundle\\NotFoundActivationStrategy',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handler.filter.class' => 'Monolog\\Handler\\FilterHandler',
            'monolog.handler.mongo.class' => 'Monolog\\Handler\\MongoDBHandler',
            'monolog.mongo.client.class' => 'MongoClient',
            'monolog.handler.elasticsearch.class' => 'Monolog\\Handler\\ElasticSearchHandler',
            'monolog.elastica.client.class' => 'Elastica\\Client',
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console' => NULL,
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => 'localhost',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.spool.enabled' => false,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => false,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.worker.cache_busting.class' => 'Assetic\\Factory\\Worker\\CacheBustingWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(

            ),
            'assetic.cache_dir' => (__DIR__.'/assetic'),
            'assetic.bundles' => array(
                0 => 'FrameworkBundle',
                1 => 'SecurityBundle',
                2 => 'TwigBundle',
                3 => 'MonologBundle',
                4 => 'SwiftmailerBundle',
                5 => 'AsseticBundle',
                6 => 'PivotalTrackerBundle',
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.enable_profiler' => false,
            'assetic.variables' => array(

            ),
            'assetic.java.bin' => 'java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/local/bin/sass',
            'assetic.reactjsx.bin' => '/usr/bin/jsx',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.filter.yui_js.class' => 'Assetic\\Filter\\Yui\\JsCompressorFilter',
            'assetic.filter.yui_js.java' => 'java',
            'assetic.filter.yui_js.charset' => 'UTF-8',
            'assetic.filter.yui_js.stacksize' => NULL,
            'assetic.filter.yui_js.timeout' => NULL,
            'assetic.filter.yui_js.nomunge' => NULL,
            'assetic.filter.yui_js.preserve_semi' => NULL,
            'assetic.filter.yui_js.disable_optimizations' => NULL,
            'assetic.filter.yui_js.linebreak' => NULL,
            'assetic.filter.yui_css.class' => 'Assetic\\Filter\\Yui\\CssCompressorFilter',
            'assetic.filter.yui_css.java' => 'java',
            'assetic.filter.yui_css.charset' => 'UTF-8',
            'assetic.filter.yui_css.stacksize' => NULL,
            'assetic.filter.yui_css.timeout' => NULL,
            'assetic.filter.yui_css.linebreak' => NULL,
            'assetic.twig_extension.functions' => array(

            ),
            'assetic.controller.class' => 'Symfony\\Bundle\\AsseticBundle\\Controller\\AsseticController',
            'assetic.routing_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Routing\\AsseticLoader',
            'assetic.cache.class' => 'Assetic\\Cache\\FilesystemCache',
            'assetic.use_controller_worker.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Worker\\UseControllerWorker',
            'assetic.request_listener.class' => 'Symfony\\Bundle\\AsseticBundle\\EventListener\\RequestListener',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
            ),
            'data_collector.templates' => array(
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.translation' => array(
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ),
                'data_collector.twig' => array(
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
            ),
            'console.command.ids' => array(
                0 => 'sk.itc.pivotaltrackerbundle.command.api.v5.account',
                1 => 'sk.itc.pivotaltrackerbundle.command.api.v5.accounts',
                2 => 'sk.itc.pivotaltrackerbundle.command.api.v5.accounts.summary',
                3 => 'sk.itc.pivotaltrackerbundle.command.api.v5.account.memberships',
                4 => 'sk.itc.pivotaltrackerbundle.command.api.v5.activity',
                5 => 'sk.itc.pivotaltrackerbundle.command.api.v5.attachments',
                6 => 'sk.itc.pivotaltrackerbundle.command.api.v5.comments',
                7 => 'sk.itc.pivotaltrackerbundle.command.api.v5.epic',
                8 => 'sk.itc.pivotaltrackerbundle.command.api.v5.epics',
                9 => 'sk.itc.pivotaltrackerbundle.command.api.v5.exports',
                10 => 'sk.itc.pivotaltrackerbundle.command.api.v5.iterations',
                11 => 'sk.itc.pivotaltrackerbundle.command.api.v5.labels',
                12 => 'sk.itc.pivotaltrackerbundle.command.api.v5.me',
                13 => 'sk.itc.pivotaltrackerbundle.command.api.v5.notifications',
                14 => 'sk.itc.pivotaltrackerbundle.command.api.v5.project',
                15 => 'sk.itc.pivotaltrackerbundle.command.api.v5.project.history',
                16 => 'sk.itc.pivotaltrackerbundle.command.api.v5.project.integrations',
                17 => 'sk.itc.pivotaltrackerbundle.command.api.v5.project.memberships',
                18 => 'sk.itc.pivotaltrackerbundle.command.api.v5.project.webhooks',
                19 => 'sk.itc.pivotaltrackerbundle.command.api.v5.projects',
                20 => 'sk.itc.pivotaltrackerbundle.command.api.v5.request.aggregator',
                21 => 'sk.itc.pivotaltrackerbundle.command.api.v5.saved.search',
                22 => 'sk.itc.pivotaltrackerbundle.command.api.v5.source.commits',
                23 => 'sk.itc.pivotaltrackerbundle.command.api.v5.stories',
                24 => 'sk.itc.pivotaltrackerbundle.command.api.v5.story',
                25 => 'sk.itc.pivotaltrackerbundle.command.api.v5.story.tasks',
                26 => 'sk.itc.pivotaltrackerbundle.command.api.v5.workspaces',
            ),
        );
    }
}
