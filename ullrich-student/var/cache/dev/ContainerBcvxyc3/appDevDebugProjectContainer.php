<?php

namespace ContainerBcvxyc3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class appDevDebugProjectContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $parameters = [];
    private $targetDirs = [];

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $dir = $this->targetDirs[0] = \dirname($containerDir);
        for ($i = 1; $i <= 4; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->parameters = $this->getDefaultParameters();

        $this->services = [];
        $this->normalizedIds = [
            'contaobootstrap\\grid\\component\\contentelement\\galleryfactory' => 'ContaoBootstrap\\Grid\\Component\\ContentElement\\GalleryFactory',
            'contaobootstrap\\grid\\component\\contentelement\\gridelementfactory' => 'ContaoBootstrap\\Grid\\Component\\ContentElement\\GridElementFactory',
            'contaobootstrap\\grid\\component\\module\\gridmodulefactory' => 'ContaoBootstrap\\Grid\\Component\\Module\\GridModuleFactory',
            'contaobootstrap\\grid\\migration\\migrateautogridwidths' => 'ContaoBootstrap\\Grid\\Migration\\MigrateAutoGridWidths',
            'lexik\\bundle\\maintenancebundle\\command\\driverlockcommand' => 'Lexik\\Bundle\\MaintenanceBundle\\Command\\DriverLockCommand',
            'lexik\\bundle\\maintenancebundle\\command\\driverunlockcommand' => 'Lexik\\Bundle\\MaintenanceBundle\\Command\\DriverUnlockCommand',
            'netzmacht\\contao\\toolkit\\dca\\listener\\button\\statebuttoncallbacklistener' => 'Netzmacht\\Contao\\Toolkit\\Dca\\Listener\\Button\\StateButtonCallbackListener',
            'netzmacht\\contao\\toolkit\\dca\\listener\\options\\templateoptionslistener' => 'Netzmacht\\Contao\\Toolkit\\Dca\\Listener\\Options\\TemplateOptionsListener',
            'netzmacht\\contao\\toolkit\\dca\\listener\\save\\generatealiaslistener' => 'Netzmacht\\Contao\\Toolkit\\Dca\\Listener\\Save\\GenerateAliasListener',
            'netzmacht\\contao\\toolkit\\dca\\listener\\wizard\\colorpickerlistener' => 'Netzmacht\\Contao\\Toolkit\\Dca\\Listener\\Wizard\\ColorPickerListener',
            'netzmacht\\contao\\toolkit\\dca\\listener\\wizard\\filepickerlistener' => 'Netzmacht\\Contao\\Toolkit\\Dca\\Listener\\Wizard\\FilePickerListener',
            'netzmacht\\contao\\toolkit\\dca\\listener\\wizard\\pagepickerlistener' => 'Netzmacht\\Contao\\Toolkit\\Dca\\Listener\\Wizard\\PagePickerListener',
            'netzmacht\\contao\\toolkit\\dca\\listener\\wizard\\popupwizardlistener' => 'Netzmacht\\Contao\\Toolkit\\Dca\\Listener\\Wizard\\PopupWizardListener',
            'symfony\\bundle\\frameworkbundle\\controller\\redirectcontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController',
            'symfony\\bundle\\frameworkbundle\\controller\\templatecontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController',
        ];
        $this->syntheticIds = [
            'contao_manager.plugin_loader' => true,
            'kernel' => true,
        ];
        $this->methodMap = [
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'cache.annotations' => 'getCache_AnnotationsService',
            'cache.app' => 'getCache_AppService',
            'cache.serializer' => 'getCache_SerializerService',
            'cache.system' => 'getCache_SystemService',
            'cache.validator' => 'getCache_ValidatorService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'contao.cors_website_roots_config_provider' => 'getContao_CorsWebsiteRootsConfigProviderService',
            'contao.data_collector' => 'getContao_DataCollectorService',
            'contao.doctrine.schema_provider' => 'getContao_Doctrine_SchemaProviderService',
            'contao.framework' => 'getContao_FrameworkService',
            'contao.install_tool_twig_extension' => 'getContao_InstallToolTwigExtensionService',
            'contao.listener.bypass_maintenance' => 'getContao_Listener_BypassMaintenanceService',
            'contao.listener.doctrine_schema' => 'getContao_Listener_DoctrineSchemaService',
            'contao.listener.insecure_installation' => 'getContao_Listener_InsecureInstallationService',
            'contao.listener.locale' => 'getContao_Listener_LocaleService',
            'contao.listener.merge_http_headers' => 'getContao_Listener_MergeHttpHeadersService',
            'contao.listener.referer_id' => 'getContao_Listener_RefererIdService',
            'contao.listener.session_listener' => 'getContao_Listener_SessionListenerService',
            'contao.listener.store_referer' => 'getContao_Listener_StoreRefererService',
            'contao.listener.toggle_view' => 'getContao_Listener_ToggleViewService',
            'contao.listener.user_session' => 'getContao_Listener_UserSessionService',
            'contao.monolog.handler' => 'getContao_Monolog_HandlerService',
            'contao.monolog.processor' => 'getContao_Monolog_ProcessorService',
            'contao.referer_id.manager' => 'getContao_RefererId_ManagerService',
            'contao.referer_id.token_generator' => 'getContao_RefererId_TokenGeneratorService',
            'contao.routing.backend_matcher' => 'getContao_Routing_BackendMatcherService',
            'contao.routing.frontend_matcher' => 'getContao_Routing_FrontendMatcherService',
            'contao.routing.scope_matcher' => 'getContao_Routing_ScopeMatcherService',
            'contao.session.contao_backend' => 'getContao_Session_ContaoBackendService',
            'contao.session.contao_frontend' => 'getContao_Session_ContaoFrontendService',
            'contao.twig.template_extension' => 'getContao_Twig_TemplateExtensionService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'data_collector.translation' => 'getDataCollector_TranslationService',
            'debug.argument_resolver' => 'getDebug_ArgumentResolverService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'debug.log_processor' => 'getDebug_LogProcessorService',
            'debug.security.access.decision_manager' => 'getDebug_Security_Access_DecisionManagerService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'esi' => 'getEsiService',
            'esi_listener' => 'getEsiListenerService',
            'file_locator' => 'getFileLocatorService',
            'fragment.listener' => 'getFragment_ListenerService',
            'http_kernel' => 'getHttpKernelService',
            'knp_menu.matcher' => 'getKnpMenu_MatcherService',
            'knp_menu.menu_provider' => 'getKnpMenu_MenuProviderService',
            'knp_menu.renderer_provider' => 'getKnpMenu_RendererProviderService',
            'lexik_maintenance.driver.factory' => 'getLexikMaintenance_Driver_FactoryService',
            'lexik_maintenance.listener' => 'getLexikMaintenance_ListenerService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.nested' => 'getMonolog_Handler_NestedService',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'monolog.processor.psr_log_message' => 'getMonolog_Processor_PsrLogMessageService',
            'nelmio_cors.cors_listener' => 'getNelmioCors_CorsListenerService',
            'nelmio_cors.options_provider.config' => 'getNelmioCors_OptionsProvider_ConfigService',
            'nelmio_security.clickjacking_listener' => 'getNelmioSecurity_ClickjackingListenerService',
            'nelmio_security.content_type_listener' => 'getNelmioSecurity_ContentTypeListenerService',
            'nelmio_security.csp_listener' => 'getNelmioSecurity_CspListenerService',
            'nelmio_security.nonce_generator' => 'getNelmioSecurity_NonceGeneratorService',
            'nelmio_security.referrer_policy_listener' => 'getNelmioSecurity_ReferrerPolicyListenerService',
            'nelmio_security.sha_computer' => 'getNelmioSecurity_ShaComputerService',
            'nelmio_security.xss_protection_listener' => 'getNelmioSecurity_XssProtectionListenerService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'request_stack' => 'getRequestStackService',
            'resolve_controller_name_subscriber' => 'getResolveControllerNameSubscriberService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_storage' => 'getSecurity_Csrf_TokenStorageService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map' => 'getSecurity_Firewall_MapService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'session' => 'getSessionService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'terminal42.header_replay.header_replay_listener' => 'getTerminal42_HeaderReplay_HeaderReplayListenerService',
            'time.datetime_formatter' => 'getTime_DatetimeFormatterService',
            'time.templating.helper.time' => 'getTime_Templating_Helper_TimeService',
            'translator' => 'getTranslatorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'web_profiler.csp.handler' => 'getWebProfiler_Csp_HandlerService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
        ];
        $this->fileMap = [
            'ContaoBootstrap\\Grid\\Component\\ContentElement\\GalleryFactory' => 'getGalleryFactoryService.php',
            'ContaoBootstrap\\Grid\\Component\\ContentElement\\GridElementFactory' => 'getGridElementFactoryService.php',
            'ContaoBootstrap\\Grid\\Component\\Module\\GridModuleFactory' => 'getGridModuleFactoryService.php',
            'ContaoBootstrap\\Grid\\Migration\\MigrateAutoGridWidths' => 'getMigrateAutoGridWidthsService.php',
            'Lexik\\Bundle\\MaintenanceBundle\\Command\\DriverLockCommand' => 'getDriverLockCommandService.php',
            'Lexik\\Bundle\\MaintenanceBundle\\Command\\DriverUnlockCommand' => 'getDriverUnlockCommandService.php',
            'Netzmacht\\Contao\\Toolkit\\Dca\\Listener\\Button\\StateButtonCallbackListener' => 'getStateButtonCallbackListenerService.php',
            'Netzmacht\\Contao\\Toolkit\\Dca\\Listener\\Options\\TemplateOptionsListener' => 'getTemplateOptionsListenerService.php',
            'Netzmacht\\Contao\\Toolkit\\Dca\\Listener\\Save\\GenerateAliasListener' => 'getGenerateAliasListenerService.php',
            'Netzmacht\\Contao\\Toolkit\\Dca\\Listener\\Wizard\\ColorPickerListener' => 'getColorPickerListenerService.php',
            'Netzmacht\\Contao\\Toolkit\\Dca\\Listener\\Wizard\\FilePickerListener' => 'getFilePickerListenerService.php',
            'Netzmacht\\Contao\\Toolkit\\Dca\\Listener\\Wizard\\PagePickerListener' => 'getPagePickerListenerService.php',
            'Netzmacht\\Contao\\Toolkit\\Dca\\Listener\\Wizard\\PopupWizardListener' => 'getPopupWizardListenerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'annotation_reader' => 'getAnnotationReaderService.php',
            'annotations.cache' => 'getAnnotations_CacheService.php',
            'annotations.cache_warmer' => 'getAnnotations_CacheWarmerService.php',
            'annotations.reader' => 'getAnnotations_ReaderService.php',
            'argument_resolver.default' => 'getArgumentResolver_DefaultService.php',
            'argument_resolver.request' => 'getArgumentResolver_RequestService.php',
            'argument_resolver.request_attribute' => 'getArgumentResolver_RequestAttributeService.php',
            'argument_resolver.service' => 'getArgumentResolver_ServiceService.php',
            'argument_resolver.session' => 'getArgumentResolver_SessionService.php',
            'argument_resolver.variadic' => 'getArgumentResolver_VariadicService.php',
            'cache.default_clearer' => 'getCache_DefaultClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'cca.meta_palettes.listener.build_palettes_listener' => 'getCca_MetaPalettes_Listener_BuildPalettesListenerService.php',
            'cca.meta_palettes.listener.sub_select_palettes_listener' => 'getCca_MetaPalettes_Listener_SubSelectPalettesListenerService.php',
            'cca.meta_palettes.listeners.meta_models_builders' => 'getCca_MetaPalettes_Listeners_MetaModelsBuildersService.php',
            'cca.meta_palettes.parser' => 'getCca_MetaPalettes_ParserService.php',
            'config.resource.self_checking_resource_checker' => 'getConfig_Resource_SelfCheckingResourceCheckerService.php',
            'console.command.about' => 'getConsole_Command_AboutService.php',
            'console.command.assets_install' => 'getConsole_Command_AssetsInstallService.php',
            'console.command.cache_clear' => 'getConsole_Command_CacheClearService.php',
            'console.command.cache_pool_clear' => 'getConsole_Command_CachePoolClearService.php',
            'console.command.cache_pool_prune' => 'getConsole_Command_CachePoolPruneService.php',
            'console.command.cache_warmup' => 'getConsole_Command_CacheWarmupService.php',
            'console.command.config_debug' => 'getConsole_Command_ConfigDebugService.php',
            'console.command.config_dump_reference' => 'getConsole_Command_ConfigDumpReferenceService.php',
            'console.command.container_debug' => 'getConsole_Command_ContainerDebugService.php',
            'console.command.debug_autowiring' => 'getConsole_Command_DebugAutowiringService.php',
            'console.command.event_dispatcher_debug' => 'getConsole_Command_EventDispatcherDebugService.php',
            'console.command.router_debug' => 'getConsole_Command_RouterDebugService.php',
            'console.command.router_match' => 'getConsole_Command_RouterMatchService.php',
            'console.command.translation_debug' => 'getConsole_Command_TranslationDebugService.php',
            'console.command.translation_update' => 'getConsole_Command_TranslationUpdateService.php',
            'console.command.xliff_lint' => 'getConsole_Command_XliffLintService.php',
            'console.command.yaml_lint' => 'getConsole_Command_YamlLintService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'console.error_listener' => 'getConsole_ErrorListenerService.php',
            'contao.cache' => 'getContao_CacheService.php',
            'contao.cache.clear_internal' => 'getContao_Cache_ClearInternalService.php',
            'contao.cache.warm_internal' => 'getContao_Cache_WarmInternalService.php',
            'contao.command.automator' => 'getContao_Command_AutomatorService.php',
            'contao.command.filesync' => 'getContao_Command_FilesyncService.php',
            'contao.command.install' => 'getContao_Command_InstallService.php',
            'contao.command.symlinks' => 'getContao_Command_SymlinksService.php',
            'contao.command.user_password_command' => 'getContao_Command_UserPasswordCommandService.php',
            'contao.command.version' => 'getContao_Command_VersionService.php',
            'contao.controller.backend_csv_import' => 'getContao_Controller_BackendCsvImportService.php',
            'contao.controller.insert_tags' => 'getContao_Controller_InsertTagsService.php',
            'contao.image.image_factory' => 'getContao_Image_ImageFactoryService.php',
            'contao.image.image_sizes' => 'getContao_Image_ImageSizesService.php',
            'contao.image.imagine' => 'getContao_Image_ImagineService.php',
            'contao.image.imagine_svg' => 'getContao_Image_ImagineSvgService.php',
            'contao.image.picture_factory' => 'getContao_Image_PictureFactoryService.php',
            'contao.image.picture_generator' => 'getContao_Image_PictureGeneratorService.php',
            'contao.image.resize_calculator' => 'getContao_Image_ResizeCalculatorService.php',
            'contao.image.resizer' => 'getContao_Image_ResizerService.php',
            'contao.install_tool' => 'getContao_InstallToolService.php',
            'contao.install_tool_user' => 'getContao_InstallToolUserService.php',
            'contao.installer' => 'getContao_InstallerService.php',
            'contao.listener.add_to_search_index' => 'getContao_Listener_AddToSearchIndexService.php',
            'contao.listener.command_scheduler' => 'getContao_Listener_CommandSchedulerService.php',
            'contao.listener.exception_converter' => 'getContao_Listener_ExceptionConverterService.php',
            'contao.listener.header_replay.page_layout' => 'getContao_Listener_HeaderReplay_PageLayoutService.php',
            'contao.listener.header_replay.user_session' => 'getContao_Listener_HeaderReplay_UserSessionService.php',
            'contao.listener.initialize_application' => 'getContao_Listener_InitializeApplicationService.php',
            'contao.listener.pretty_error_screens' => 'getContao_Listener_PrettyErrorScreensService.php',
            'contao.listener.response_exception' => 'getContao_Listener_ResponseExceptionService.php',
            'contao.menu.matcher' => 'getContao_Menu_MatcherService.php',
            'contao.menu.renderer' => 'getContao_Menu_RendererService.php',
            'contao.picker.article_provider' => 'getContao_Picker_ArticleProviderService.php',
            'contao.picker.builder' => 'getContao_Picker_BuilderService.php',
            'contao.picker.file_provider' => 'getContao_Picker_FileProviderService.php',
            'contao.picker.page_provider' => 'getContao_Picker_PageProviderService.php',
            'contao.resource_finder' => 'getContao_ResourceFinderService.php',
            'contao.resource_locator' => 'getContao_ResourceLocatorService.php',
            'contao.routing.frontend_loader' => 'getContao_Routing_FrontendLoaderService.php',
            'contao.routing.url_generator' => 'getContao_Routing_UrlGeneratorService.php',
            'contao.security.authenticator' => 'getContao_Security_AuthenticatorService.php',
            'contao.security.user_provider' => 'getContao_Security_UserProviderService.php',
            'contao_bootstrap.config' => 'getContaoBootstrap_ConfigService.php',
            'contao_bootstrap.core.config_subscriber' => 'getContaoBootstrap_Core_ConfigSubscriberService.php',
            'contao_bootstrap.core.helper.color_rotate' => 'getContaoBootstrap_Core_Helper_ColorRotateService.php',
            'contao_bootstrap.core.listener.content_dca' => 'getContaoBootstrap_Core_Listener_ContentDcaService.php',
            'contao_bootstrap.core.listener.hook_listener' => 'getContaoBootstrap_Core_Listener_HookListenerService.php',
            'contao_bootstrap.core.listener.layout_dca' => 'getContaoBootstrap_Core_Listener_LayoutDcaService.php',
            'contao_bootstrap.core.listener.module_dca' => 'getContaoBootstrap_Core_Listener_ModuleDcaService.php',
            'contao_bootstrap.core.listener.parse_template' => 'getContaoBootstrap_Core_Listener_ParseTemplateService.php',
            'contao_bootstrap.environment' => 'getContaoBootstrap_EnvironmentService.php',
            'contao_bootstrap.grid.grid_builder' => 'getContaoBootstrap_Grid_GridBuilderService.php',
            'contao_bootstrap.grid.grid_provider' => 'getContaoBootstrap_Grid_GridProviderService.php',
            'contao_bootstrap.grid.listeners.build_context_config' => 'getContaoBootstrap_Grid_Listeners_BuildContextConfigService.php',
            'contao_bootstrap.grid.listeners.dca.content' => 'getContaoBootstrap_Grid_Listeners_Dca_ContentService.php',
            'contao_bootstrap.grid.listeners.dca.form' => 'getContaoBootstrap_Grid_Listeners_Dca_FormService.php',
            'contao_bootstrap.grid.listeners.dca.grid' => 'getContaoBootstrap_Grid_Listeners_Dca_GridService.php',
            'contao_bootstrap.grid.listeners.dca.module' => 'getContaoBootstrap_Grid_Listeners_Dca_ModuleService.php',
            'contao_bootstrap.grid.listeners.theme_export' => 'getContaoBootstrap_Grid_Listeners_ThemeExportService.php',
            'contao_bootstrap.grid.listeners.theme_import' => 'getContaoBootstrap_Grid_Listeners_ThemeImportService.php',
            'contao_bootstrap.grid.response_tagger' => 'getContaoBootstrap_Grid_ResponseTaggerService.php',
            'contao_bootstrap.grid.view.renderer_helper' => 'getContaoBootstrap_Grid_View_RendererHelperService.php',
            'contao_bootstrap.view.template.post_render_filter' => 'getContaoBootstrap_View_Template_PostRenderFilterService.php',
            'contao_bootstrap.view.template.pre_render_filter' => 'getContaoBootstrap_View_Template_PreRenderFilterService.php',
            'contao_calendar.listener.generate_page' => 'getContaoCalendar_Listener_GeneratePageService.php',
            'contao_calendar.listener.insert_tags' => 'getContaoCalendar_Listener_InsertTagsService.php',
            'contao_calendar.listener.preview_url_convert' => 'getContaoCalendar_Listener_PreviewUrlConvertService.php',
            'contao_calendar.listener.preview_url_create' => 'getContaoCalendar_Listener_PreviewUrlCreateService.php',
            'contao_calendar.picker.event_provider' => 'getContaoCalendar_Picker_EventProviderService.php',
            'contao_faq.listener.insert_tags' => 'getContaoFaq_Listener_InsertTagsService.php',
            'contao_faq.picker.faq_provider' => 'getContaoFaq_Picker_FaqProviderService.php',
            'contao_installation.command.lock' => 'getContaoInstallation_Command_LockService.php',
            'contao_installation.command.unlock' => 'getContaoInstallation_Command_UnlockService.php',
            'contao_manager.cache.clear_bundle' => 'getContaoManager_Cache_ClearBundleService.php',
            'contao_manager.command.install_web_dir' => 'getContaoManager_Command_InstallWebDirService.php',
            'contao_manager.listener.initialize_application' => 'getContaoManager_Listener_InitializeApplicationService.php',
            'contao_manager.listener.install_command' => 'getContaoManager_Listener_InstallCommandService.php',
            'contao_manager.routing_loader' => 'getContaoManager_RoutingLoaderService.php',
            'contao_news.listener.generate_page' => 'getContaoNews_Listener_GeneratePageService.php',
            'contao_news.listener.insert_tags' => 'getContaoNews_Listener_InsertTagsService.php',
            'contao_news.listener.preview_url_convert' => 'getContaoNews_Listener_PreviewUrlConvertService.php',
            'contao_news.listener.preview_url_create' => 'getContaoNews_Listener_PreviewUrlCreateService.php',
            'contao_news.picker.news_provider' => 'getContaoNews_Picker_NewsProviderService.php',
            'ctn.materialiconsinserttag.listener.hooks' => 'getCtn_Materialiconsinserttag_Listener_HooksService.php',
            'debug.dump_listener' => 'getDebug_DumpListenerService.php',
            'debug.file_link_formatter.url_format' => 'getDebug_FileLinkFormatter_UrlFormatService.php',
            'dependency_injection.config.container_parameters_resource_checker' => 'getDependencyInjection_Config_ContainerParametersResourceCheckerService.php',
            'doctrine.database_create_command' => 'getDoctrine_DatabaseCreateCommandService.php',
            'doctrine.database_drop_command' => 'getDoctrine_DatabaseDropCommandService.php',
            'doctrine.generate_entities_command' => 'getDoctrine_GenerateEntitiesCommandService.php',
            'doctrine.query_sql_command' => 'getDoctrine_QuerySqlCommandService.php',
            'doctrine_cache.contains_command' => 'getDoctrineCache_ContainsCommandService.php',
            'doctrine_cache.delete_command' => 'getDoctrineCache_DeleteCommandService.php',
            'doctrine_cache.flush_command' => 'getDoctrineCache_FlushCommandService.php',
            'doctrine_cache.stats_command' => 'getDoctrineCache_StatsCommandService.php',
            'filesystem' => 'getFilesystemService.php',
            'fragment.handler' => 'getFragment_HandlerService.php',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService.php',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService.php',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService.php',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService.php',
            'knp_menu.factory' => 'getKnpMenu_FactoryService.php',
            'knp_menu.menu_provider.builder_alias' => 'getKnpMenu_MenuProvider_BuilderAliasService.php',
            'knp_menu.menu_provider.lazy' => 'getKnpMenu_MenuProvider_LazyService.php',
            'knp_menu.renderer.list' => 'getKnpMenu_Renderer_ListService.php',
            'knp_menu.renderer.twig' => 'getKnpMenu_Renderer_TwigService.php',
            'knp_menu.voter.router' => 'getKnpMenu_Voter_RouterService.php',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService.php',
            'monolog.logger.console' => 'getMonolog_Logger_ConsoleService.php',
            'monolog.logger.contao' => 'getMonolog_Logger_ContaoService.php',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService.php',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService.php',
            'nelmio_security.csp_report.log_formatter' => 'getNelmioSecurity_CspReport_LogFormatterService.php',
            'nelmio_security.csp_report.logger' => 'getNelmioSecurity_CspReport_LoggerService.php',
            'nelmio_security.csp_reporter_controller' => 'getNelmioSecurity_CspReporterControllerService.php',
            'nelmio_security.ua_parser.ua_php' => 'getNelmioSecurity_UaParser_UaPhpService.php',
            'nelmio_security.ua_parser.ua_php.provider' => 'getNelmioSecurity_UaParser_UaPhp_ProviderService.php',
            'netzmacht.contao_toolkit.callback_invoker' => 'getNetzmacht_ContaoToolkit_CallbackInvokerService.php',
            'netzmacht.contao_toolkit.component.content_element_factory' => 'getNetzmacht_ContaoToolkit_Component_ContentElementFactoryService.php',
            'netzmacht.contao_toolkit.component.frontend_module_factory' => 'getNetzmacht_ContaoToolkit_Component_FrontendModuleFactoryService.php',
            'netzmacht.contao_toolkit.contao.backend_user' => 'getNetzmacht_ContaoToolkit_Contao_BackendUserService.php',
            'netzmacht.contao_toolkit.contao.input_adapter' => 'getNetzmacht_ContaoToolkit_Contao_InputAdapterService.php',
            'netzmacht.contao_toolkit.contao_services_factory' => 'getNetzmacht_ContaoToolkit_ContaoServicesFactoryService.php',
            'netzmacht.contao_toolkit.data.alias_generator.factory.default_factory' => 'getNetzmacht_ContaoToolkit_Data_AliasGenerator_Factory_DefaultFactoryService.php',
            'netzmacht.contao_toolkit.dca.manager' => 'getNetzmacht_ContaoToolkit_Dca_ManagerService.php',
            'netzmacht.contao_toolkit.listeners.create_formatter_subscriber' => 'getNetzmacht_ContaoToolkit_Listeners_CreateFormatterSubscriberService.php',
            'netzmacht.contao_toolkit.listeners.get_template_helpers' => 'getNetzmacht_ContaoToolkit_Listeners_GetTemplateHelpersService.php',
            'netzmacht.contao_toolkit.listeners.merge_hook_listeners' => 'getNetzmacht_ContaoToolkit_Listeners_MergeHookListenersService.php',
            'netzmacht.contao_toolkit.listeners.register_component_decorators' => 'getNetzmacht_ContaoToolkit_Listeners_RegisterComponentDecoratorsService.php',
            'netzmacht.contao_toolkit.listeners.register_models' => 'getNetzmacht_ContaoToolkit_Listeners_RegisterModelsService.php',
            'netzmacht.contao_toolkit.listeners.set_operation_data_attribute' => 'getNetzmacht_ContaoToolkit_Listeners_SetOperationDataAttributeService.php',
            'netzmacht.contao_toolkit.routing.scope_matcher' => 'getNetzmacht_ContaoToolkit_Routing_ScopeMatcherService.php',
            'property_accessor' => 'getPropertyAccessorService.php',
            'router.cache_warmer' => 'getRouter_CacheWarmerService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'security.access.authenticated_voter' => 'getSecurity_Access_AuthenticatedVoterService.php',
            'security.access.expression_voter' => 'getSecurity_Access_ExpressionVoterService.php',
            'security.access.simple_role_voter' => 'getSecurity_Access_SimpleRoleVoterService.php',
            'security.access_listener' => 'getSecurity_AccessListenerService.php',
            'security.access_map' => 'getSecurity_AccessMapService.php',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService.php',
            'security.authentication.listener.simple_preauth.backend' => 'getSecurity_Authentication_Listener_SimplePreauth_BackendService.php',
            'security.authentication.listener.simple_preauth.frontend' => 'getSecurity_Authentication_Listener_SimplePreauth_FrontendService.php',
            'security.authentication.provider.simple_preauth.backend' => 'getSecurity_Authentication_Provider_SimplePreauth_BackendService.php',
            'security.authentication.provider.simple_preauth.frontend' => 'getSecurity_Authentication_Provider_SimplePreauth_FrontendService.php',
            'security.authentication.session_strategy.backend' => 'getSecurity_Authentication_SessionStrategy_BackendService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.channel_listener' => 'getSecurity_ChannelListenerService.php',
            'security.command.user_password_encoder' => 'getSecurity_Command_UserPasswordEncoderService.php',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService.php',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService.php',
            'security.firewall.map.context.backend' => 'getSecurity_Firewall_Map_Context_BackendService.php',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService.php',
            'security.firewall.map.context.frontend' => 'getSecurity_Firewall_Map_Context_FrontendService.php',
            'security.firewall.map.context.install' => 'getSecurity_Firewall_Map_Context_InstallService.php',
            'security.http_utils' => 'getSecurity_HttpUtilsService.php',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService.php',
            'security.request_matcher.gsctxli' => 'getSecurity_RequestMatcher_GsctxliService.php',
            'security.request_matcher.y.peoiw' => 'getSecurity_RequestMatcher_Y_PeoiwService.php',
            'security.user_checker' => 'getSecurity_UserCheckerService.php',
            'security.user_value_resolver' => 'getSecurity_UserValueResolverService.php',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService.php',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService.php',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService.php',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService.php',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService.php',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService.php',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService.php',
            'templating' => 'getTemplatingService.php',
            'templating.cache_warmer.template_paths' => 'getTemplating_CacheWarmer_TemplatePathsService.php',
            'templating.filename_parser' => 'getTemplating_FilenameParserService.php',
            'templating.finder' => 'getTemplating_FinderService.php',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService.php',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService.php',
            'templating.loader' => 'getTemplating_LoaderService.php',
            'terminal42.header_replay.header_replay_stop_propagation_listener' => 'getTerminal42_HeaderReplay_HeaderReplayStopPropagationListenerService.php',
            'terminal42_folderpage.datacontainer.page' => 'getTerminal42Folderpage_Datacontainer_PageService.php',
            'terminal42_folderpage.listener.page_status_icon' => 'getTerminal42Folderpage_Listener_PageStatusIconService.php',
            'terminal42_folderpage.listener.system_messages' => 'getTerminal42Folderpage_Listener_SystemMessagesService.php',
            'theme_helper.listener.insert_tags' => 'getThemeHelper_Listener_InsertTagsService.php',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService.php',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService.php',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService.php',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService.php',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService.php',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService.php',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService.php',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService.php',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService.php',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService.php',
            'translation.extractor' => 'getTranslation_ExtractorService.php',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService.php',
            'translation.loader' => 'getTranslation_LoaderService.php',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService.php',
            'translation.loader.dat' => 'getTranslation_Loader_DatService.php',
            'translation.loader.ini' => 'getTranslation_Loader_IniService.php',
            'translation.loader.json' => 'getTranslation_Loader_JsonService.php',
            'translation.loader.mo' => 'getTranslation_Loader_MoService.php',
            'translation.loader.php' => 'getTranslation_Loader_PhpService.php',
            'translation.loader.po' => 'getTranslation_Loader_PoService.php',
            'translation.loader.qt' => 'getTranslation_Loader_QtService.php',
            'translation.loader.res' => 'getTranslation_Loader_ResService.php',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService.php',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService.php',
            'translation.reader' => 'getTranslation_ReaderService.php',
            'translation.warmer' => 'getTranslation_WarmerService.php',
            'translation.writer' => 'getTranslation_WriterService.php',
            'twig.cache_warmer' => 'getTwig_CacheWarmerService.php',
            'twig.command.debug' => 'getTwig_Command_DebugService.php',
            'twig.command.lint' => 'getTwig_Command_LintService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService.php',
            'twig.form.renderer' => 'getTwig_Form_RendererService.php',
            'twig.runtime.httpkernel' => 'getTwig_Runtime_HttpkernelService.php',
            'twig.template_cache_warmer' => 'getTwig_TemplateCacheWarmerService.php',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService.php',
            'var_dumper.cli_dumper' => 'getVarDumper_CliDumperService.php',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService.php',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService.php',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService.php',
        ];
        $this->privates = [
            'monolog.handler.contao' => true,
            'netzmacht.contao_toolkit.translation.translator' => true,
            'security.authentication.session_strategy.frontend' => true,
            'session.storage' => true,
            'session_listener' => true,
            'swiftmailer.mailer' => true,
            'swiftmailer.plugin.messagelogger' => true,
            'swiftmailer.transport' => true,
            'ContaoBootstrap\\Grid\\Component\\ContentElement\\GalleryFactory' => true,
            'ContaoBootstrap\\Grid\\Component\\ContentElement\\GridElementFactory' => true,
            'ContaoBootstrap\\Grid\\Component\\Module\\GridModuleFactory' => true,
            'Lexik\\Bundle\\MaintenanceBundle\\Command\\DriverLockCommand' => true,
            'Lexik\\Bundle\\MaintenanceBundle\\Command\\DriverUnlockCommand' => true,
            'annotation_reader' => true,
            'annotations.cache' => true,
            'annotations.cache_warmer' => true,
            'annotations.reader' => true,
            'argument_resolver.default' => true,
            'argument_resolver.request' => true,
            'argument_resolver.request_attribute' => true,
            'argument_resolver.service' => true,
            'argument_resolver.session' => true,
            'argument_resolver.variadic' => true,
            'assets.context' => true,
            'assets.packages' => true,
            'cache.annotations' => true,
            'cache.default_clearer' => true,
            'cache.serializer' => true,
            'cache.validator' => true,
            'cca.meta_palettes.parser' => true,
            'config.resource.self_checking_resource_checker' => true,
            'config_cache_factory' => true,
            'console.command.about' => true,
            'console.command.assets_install' => true,
            'console.command.cache_clear' => true,
            'console.command.cache_pool_clear' => true,
            'console.command.cache_pool_prune' => true,
            'console.command.cache_warmup' => true,
            'console.command.config_debug' => true,
            'console.command.config_dump_reference' => true,
            'console.command.container_debug' => true,
            'console.command.debug_autowiring' => true,
            'console.command.event_dispatcher_debug' => true,
            'console.command.router_debug' => true,
            'console.command.router_match' => true,
            'console.command.translation_debug' => true,
            'console.command.translation_update' => true,
            'console.command.xliff_lint' => true,
            'console.command.yaml_lint' => true,
            'console.error_listener' => true,
            'contao.cache.clear_internal' => true,
            'contao.cache.warm_internal' => true,
            'contao.command.automator' => true,
            'contao.command.filesync' => true,
            'contao.command.install' => true,
            'contao.command.symlinks' => true,
            'contao.command.user_password_command' => true,
            'contao.command.version' => true,
            'contao.controller.backend_csv_import' => true,
            'contao.cors_website_roots_config_provider' => true,
            'contao.data_collector' => true,
            'contao.doctrine.schema_provider' => true,
            'contao.image.resize_calculator' => true,
            'contao.install_tool' => true,
            'contao.install_tool_twig_extension' => true,
            'contao.install_tool_user' => true,
            'contao.installer' => true,
            'contao.listener.add_to_search_index' => true,
            'contao.listener.bypass_maintenance' => true,
            'contao.listener.command_scheduler' => true,
            'contao.listener.doctrine_schema' => true,
            'contao.listener.exception_converter' => true,
            'contao.listener.header_replay.page_layout' => true,
            'contao.listener.header_replay.user_session' => true,
            'contao.listener.initialize_application' => true,
            'contao.listener.insecure_installation' => true,
            'contao.listener.locale' => true,
            'contao.listener.merge_http_headers' => true,
            'contao.listener.pretty_error_screens' => true,
            'contao.listener.referer_id' => true,
            'contao.listener.response_exception' => true,
            'contao.listener.session_listener' => true,
            'contao.listener.store_referer' => true,
            'contao.listener.toggle_view' => true,
            'contao.listener.user_session' => true,
            'contao.menu.matcher' => true,
            'contao.monolog.handler' => true,
            'contao.monolog.processor' => true,
            'contao.picker.article_provider' => true,
            'contao.picker.file_provider' => true,
            'contao.picker.page_provider' => true,
            'contao.referer_id.manager' => true,
            'contao.referer_id.token_generator' => true,
            'contao.routing.backend_matcher' => true,
            'contao.routing.frontend_loader' => true,
            'contao.routing.frontend_matcher' => true,
            'contao.routing.scope_matcher' => true,
            'contao.security.authenticator' => true,
            'contao.security.user_provider' => true,
            'contao.session.contao_backend' => true,
            'contao.session.contao_frontend' => true,
            'contao.twig.template_extension' => true,
            'contao_bootstrap.config' => true,
            'contao_bootstrap.core.helper.color_rotate' => true,
            'contao_bootstrap.grid.grid_builder' => true,
            'contao_bootstrap.grid.grid_provider' => true,
            'contao_bootstrap.view.template.post_render_filter' => true,
            'contao_bootstrap.view.template.pre_render_filter' => true,
            'contao_calendar.listener.preview_url_convert' => true,
            'contao_calendar.listener.preview_url_create' => true,
            'contao_calendar.picker.event_provider' => true,
            'contao_faq.picker.faq_provider' => true,
            'contao_installation.command.lock' => true,
            'contao_installation.command.unlock' => true,
            'contao_manager.cache.clear_bundle' => true,
            'contao_manager.command.install_web_dir' => true,
            'contao_manager.listener.initialize_application' => true,
            'contao_manager.listener.install_command' => true,
            'contao_news.listener.preview_url_convert' => true,
            'contao_news.listener.preview_url_create' => true,
            'contao_news.picker.news_provider' => true,
            'controller_name_converter' => true,
            'data_collector.request' => true,
            'data_collector.router' => true,
            'data_collector.translation' => true,
            'debug.argument_resolver' => true,
            'debug.controller_resolver' => true,
            'debug.debug_handlers_listener' => true,
            'debug.dump_listener' => true,
            'debug.event_dispatcher' => true,
            'debug.file_link_formatter' => true,
            'debug.file_link_formatter.url_format' => true,
            'debug.log_processor' => true,
            'debug.security.access.decision_manager' => true,
            'debug.stopwatch' => true,
            'dependency_injection.config.container_parameters_resource_checker' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.dbal.logger.profiling.default' => true,
            'doctrine.generate_entities_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine_cache.contains_command' => true,
            'doctrine_cache.delete_command' => true,
            'doctrine_cache.flush_command' => true,
            'doctrine_cache.stats_command' => true,
            'esi' => true,
            'esi_listener' => true,
            'file_locator' => true,
            'fragment.handler' => true,
            'fragment.listener' => true,
            'fragment.renderer.esi' => true,
            'fragment.renderer.hinclude' => true,
            'fragment.renderer.inline' => true,
            'kernel.class_cache.cache_warmer' => true,
            'knp_menu.menu_provider' => true,
            'knp_menu.menu_provider.builder_alias' => true,
            'knp_menu.menu_provider.lazy' => true,
            'knp_menu.renderer.list' => true,
            'knp_menu.renderer.twig' => true,
            'knp_menu.renderer_provider' => true,
            'knp_menu.voter.router' => true,
            'lexik_maintenance.listener' => true,
            'locale_listener' => true,
            'logger' => true,
            'monolog.handler.console' => true,
            'monolog.handler.main' => true,
            'monolog.handler.nested' => true,
            'monolog.handler.null_internal' => true,
            'monolog.logger.cache' => true,
            'monolog.logger.console' => true,
            'monolog.logger.contao' => true,
            'monolog.logger.doctrine' => true,
            'monolog.logger.event' => true,
            'monolog.logger.php' => true,
            'monolog.logger.profiler' => true,
            'monolog.logger.request' => true,
            'monolog.logger.security' => true,
            'monolog.logger.templating' => true,
            'monolog.logger.translation' => true,
            'monolog.processor.psr_log_message' => true,
            'nelmio_cors.cors_listener' => true,
            'nelmio_cors.options_provider.config' => true,
            'nelmio_security.clickjacking_listener' => true,
            'nelmio_security.content_type_listener' => true,
            'nelmio_security.csp_listener' => true,
            'nelmio_security.csp_report.log_formatter' => true,
            'nelmio_security.csp_report.logger' => true,
            'nelmio_security.nonce_generator' => true,
            'nelmio_security.referrer_policy_listener' => true,
            'nelmio_security.sha_computer' => true,
            'nelmio_security.ua_parser.ua_php.provider' => true,
            'nelmio_security.xss_protection_listener' => true,
            'netzmacht.contao_toolkit.callback_invoker' => true,
            'netzmacht.contao_toolkit.contao.backend_user' => true,
            'netzmacht.contao_toolkit.contao.input_adapter' => true,
            'netzmacht.contao_toolkit.contao_services_factory' => true,
            'netzmacht.contao_toolkit.dca.manager' => true,
            'netzmacht.contao_toolkit.listeners.create_formatter_subscriber' => true,
            'netzmacht.contao_toolkit.listeners.get_template_helpers' => true,
            'netzmacht.contao_toolkit.routing.scope_matcher' => true,
            'profiler_listener' => true,
            'property_accessor' => true,
            'resolve_controller_name_subscriber' => true,
            'response_listener' => true,
            'router.cache_warmer' => true,
            'router.request_context' => true,
            'router_listener' => true,
            'security.access.authenticated_voter' => true,
            'security.access.expression_voter' => true,
            'security.access.simple_role_voter' => true,
            'security.access_listener' => true,
            'security.access_map' => true,
            'security.authentication.guard_handler' => true,
            'security.authentication.listener.simple_preauth.backend' => true,
            'security.authentication.listener.simple_preauth.frontend' => true,
            'security.authentication.manager' => true,
            'security.authentication.provider.simple_preauth.backend' => true,
            'security.authentication.provider.simple_preauth.frontend' => true,
            'security.authentication.session_strategy.backend' => true,
            'security.authentication.trust_resolver' => true,
            'security.channel_listener' => true,
            'security.command.user_password_encoder' => true,
            'security.csrf.token_storage' => true,
            'security.encoder_factory' => true,
            'security.firewall' => true,
            'security.firewall.map' => true,
            'security.firewall.map.context.backend' => true,
            'security.firewall.map.context.dev' => true,
            'security.firewall.map.context.frontend' => true,
            'security.firewall.map.context.install' => true,
            'security.http_utils' => true,
            'security.logout_url_generator' => true,
            'security.rememberme.response_listener' => true,
            'security.request_matcher.gsctxli' => true,
            'security.request_matcher.y.peoiw' => true,
            'security.role_hierarchy' => true,
            'security.user_checker' => true,
            'security.user_value_resolver' => true,
            'security.validator.user_password' => true,
            'sensio_distribution.security_checker' => true,
            'sensio_distribution.security_checker.command' => true,
            'session.save_listener' => true,
            'session.storage.filesystem' => true,
            'session.storage.metadata_bag' => true,
            'session.storage.native' => true,
            'session.storage.php_bridge' => true,
            'streamed_response_listener' => true,
            'swiftmailer.email_sender.listener' => true,
            'templating.cache_warmer.template_paths' => true,
            'templating.filename_parser' => true,
            'templating.finder' => true,
            'templating.helper.logout_url' => true,
            'templating.helper.security' => true,
            'templating.locator' => true,
            'templating.name_parser' => true,
            'terminal42.header_replay.header_replay_listener' => true,
            'terminal42.header_replay.header_replay_stop_propagation_listener' => true,
            'time.datetime_formatter' => true,
            'time.templating.helper.time' => true,
            'translation.dumper.csv' => true,
            'translation.dumper.ini' => true,
            'translation.dumper.json' => true,
            'translation.dumper.mo' => true,
            'translation.dumper.php' => true,
            'translation.dumper.po' => true,
            'translation.dumper.qt' => true,
            'translation.dumper.res' => true,
            'translation.dumper.xliff' => true,
            'translation.dumper.yml' => true,
            'translation.extractor' => true,
            'translation.extractor.php' => true,
            'translation.loader' => true,
            'translation.loader.csv' => true,
            'translation.loader.dat' => true,
            'translation.loader.ini' => true,
            'translation.loader.json' => true,
            'translation.loader.mo' => true,
            'translation.loader.php' => true,
            'translation.loader.po' => true,
            'translation.loader.qt' => true,
            'translation.loader.res' => true,
            'translation.loader.xliff' => true,
            'translation.loader.yml' => true,
            'translation.reader' => true,
            'translation.warmer' => true,
            'translation.writer' => true,
            'translator.default' => true,
            'translator_listener' => true,
            'twig.cache_warmer' => true,
            'twig.command.debug' => true,
            'twig.command.lint' => true,
            'twig.exception_listener' => true,
            'twig.form.renderer' => true,
            'twig.loader' => true,
            'twig.profile' => true,
            'twig.runtime.httpkernel' => true,
            'twig.template_cache_warmer' => true,
            'twig.translation.extractor' => true,
            'uri_signer' => true,
            'validate_request_listener' => true,
            'var_dumper.cli_dumper' => true,
            'web_profiler.csp.handler' => true,
            'web_profiler.debug_toolbar' => true,
        ];
        $this->aliases = [
            'cache.app_clearer' => 'cache.default_clearer',
            'console.command.contao_corebundle_command_automatorcommand' => 'contao.command.automator',
            'console.command.contao_corebundle_command_filesynccommand' => 'contao.command.filesync',
            'console.command.contao_corebundle_command_installcommand' => 'contao.command.install',
            'console.command.contao_corebundle_command_symlinkscommand' => 'contao.command.symlinks',
            'console.command.contao_corebundle_command_userpasswordcommand' => 'contao.command.user_password_command',
            'console.command.contao_corebundle_command_versioncommand' => 'contao.command.version',
            'console.command.contao_installationbundle_command_lockcommand' => 'contao_installation.command.lock',
            'console.command.contao_installationbundle_command_unlockcommand' => 'contao_installation.command.unlock',
            'console.command.contao_managerbundle_command_installwebdircommand' => 'contao_manager.command.install_web_dir',
            'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'doctrine_cache.contains_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'doctrine_cache.delete_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'doctrine_cache.flush_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'doctrine_cache.stats_command',
            'console.command.lexik_bundle_maintenancebundle_command_driverlockcommand' => 'Lexik\\Bundle\\MaintenanceBundle\\Command\\DriverLockCommand',
            'console.command.lexik_bundle_maintenancebundle_command_driverunlockcommand' => 'Lexik\\Bundle\\MaintenanceBundle\\Command\\DriverUnlockCommand',
            'database_connection' => 'doctrine.dbal.default_connection',
            'event_dispatcher' => 'debug.event_dispatcher',
            'mailer' => 'swiftmailer.mailer.default',
            'monolog.handler.contao' => 'contao.monolog.handler',
            'netzmacht.contao_toolkit.dca.listeners.alias_generator' => 'Netzmacht\\Contao\\Toolkit\\Dca\\Listener\\Save\\GenerateAliasListener',
            'netzmacht.contao_toolkit.dca.listeners.color_picker' => 'Netzmacht\\Contao\\Toolkit\\Dca\\Listener\\Wizard\\ColorPickerListener',
            'netzmacht.contao_toolkit.dca.listeners.file_picker' => 'Netzmacht\\Contao\\Toolkit\\Dca\\Listener\\Wizard\\FilePickerListener',
            'netzmacht.contao_toolkit.dca.listeners.page_picker' => 'Netzmacht\\Contao\\Toolkit\\Dca\\Listener\\Wizard\\PagePickerListener',
            'netzmacht.contao_toolkit.dca.listeners.popup_wizard' => 'Netzmacht\\Contao\\Toolkit\\Dca\\Listener\\Wizard\\PopupWizardListener',
            'netzmacht.contao_toolkit.dca.listeners.state_button_callback' => 'Netzmacht\\Contao\\Toolkit\\Dca\\Listener\\Button\\StateButtonCallbackListener',
            'netzmacht.contao_toolkit.dca.listeners.template_options' => 'Netzmacht\\Contao\\Toolkit\\Dca\\Listener\\Options\\TemplateOptionsListener',
            'netzmacht.contao_toolkit.translation.translator' => 'translator',
            'security.authentication.session_strategy.frontend' => 'security.authentication.session_strategy.backend',
            'session.storage' => 'session.storage.native',
            'session_listener' => 'contao.listener.session_listener',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
        ];
    }

    public function getRemovedIds()
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        $a = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('Vq1n-Us3Vi', 0, ($this->targetDirs[0].'/pools'));
        $a->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'});

        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('UPm4-p1par', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the public 'contao.framework' shared service.
     *
     * @return \Contao\CoreBundle\Framework\ContaoFramework
     */
    protected function getContao_FrameworkService()
    {
        $this->services['contao.framework'] = $instance = new \Contao\CoreBundle\Framework\ContaoFramework(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'}, ${($_ = isset($this->services['contao.routing.scope_matcher']) ? $this->services['contao.routing.scope_matcher'] : $this->getContao_Routing_ScopeMatcherService()) && false ?: '_'}, $this->targetDirs[3], 8183);

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'}, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, 'UTF-8', ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, NULL);
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], [], 'default', '');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Configuration();

        $b = new \Doctrine\DBAL\Logging\LoggerChain();
        $b->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger(${($_ = isset($this->services['monolog.logger.doctrine']) ? $this->services['monolog.logger.doctrine'] : $this->getMonolog_Logger_DoctrineService()) && false ?: '_'}, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'}));
        $b->addLogger(${($_ = isset($this->services['doctrine.dbal.logger.profiling.default']) ? $this->services['doctrine.dbal.logger.profiling.default'] : ($this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())) && false ?: '_'});

        $a->setSQLLogger($b);
        $c = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);

        $d = ${($_ = isset($this->services['contao.listener.doctrine_schema']) ? $this->services['contao.listener.doctrine_schema'] : $this->getContao_Listener_DoctrineSchemaService()) && false ?: '_'};

        $c->addEventListener([0 => 'onSchemaIndexDefinition'], $d);
        $c->addEventListener([0 => 'postGenerateSchema'], $d);

        return $this->services['doctrine.dbal.default_connection'] = ${($_ = isset($this->services['doctrine.dbal.connection_factory']) ? $this->services['doctrine.dbal.connection_factory'] : $this->getDoctrine_Dbal_ConnectionFactoryService()) && false ?: '_'}->createConnection(['driver' => 'pdo_mysql', 'host' => 'localhost', 'port' => 3306, 'user' => 'ullrich', 'password' => 'bachelor2019!', 'dbname' => 'ullrich', 'charset' => 'UTF8', 'driverOptions' => [1013 => false], 'defaultTableOptions' => []], $a, $c, []);
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['debug.controller_resolver']) ? $this->services['debug.controller_resolver'] : $this->getDebug_ControllerResolverService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->getDebug_ArgumentResolverService()) && false ?: '_'});
    }

    /**
     * Gets the public 'knp_menu.matcher' shared service.
     *
     * @return \Knp\Menu\Matcher\Matcher
     */
    protected function getKnpMenu_MatcherService()
    {
        return $this->services['knp_menu.matcher'] = new \Knp\Menu\Matcher\Matcher(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['knp_menu.voter.router']) ? $this->services['knp_menu.voter.router'] : $this->load('getKnpMenu_Voter_RouterService.php')) && false ?: '_'};
        }, 1));
    }

    /**
     * Gets the public 'lexik_maintenance.driver.factory' shared service.
     *
     * @return \Lexik\Bundle\MaintenanceBundle\Drivers\DriverFactory
     */
    protected function getLexikMaintenance_Driver_FactoryService()
    {
        return $this->services['lexik_maintenance.driver.factory'] = new \Lexik\Bundle\MaintenanceBundle\Drivers\DriverFactory(new \Lexik\Bundle\MaintenanceBundle\Drivers\DatabaseDriver(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}), ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, $this->getParameter('lexik_maintenance.driver'));
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = ${($_ = isset($this->services['monolog.logger.profiler']) ? $this->services['monolog.logger.profiler'] : $this->getMonolog_Logger_ProfilerService()) && false ?: '_'};

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDirs[0].'/profiler')), $a, true);

        $b = ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'};
        $c = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $c->addInstance('cache.app', ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->getCache_AppService()) && false ?: '_'});
        $c->addInstance('cache.system', ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->getCache_SystemService()) && false ?: '_'});
        $c->addInstance('cache.validator', ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'});
        $c->addInstance('cache.serializer', ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'});
        $c->addInstance('cache.annotations', ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'});
        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
        $d->addLogger('default', ${($_ = isset($this->services['doctrine.dbal.logger.profiling.default']) ? $this->services['doctrine.dbal.logger.profiling.default'] : ($this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())) && false ?: '_'});
        $e = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $e->setKernel($b);
        }

        $instance->add(${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : ($this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector())) && false ?: '_'});
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'}));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, ($this->targetDirs[0].'/appDevDebugProjectContainer')));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}));
        $instance->add(${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : ($this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector())) && false ?: '_'});
        $instance->add($c);
        $instance->add(${($_ = isset($this->services['data_collector.translation']) ? $this->services['data_collector.translation'] : $this->getDataCollector_TranslationService()) && false ?: '_'});
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : ($this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}, ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'}));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : ($this->services['twig.profile'] = new \Twig\Profiler\Profile())) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}));
        $instance->add($d);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(${($_ = isset($this->services['data_collector.dump']) ? $this->services['data_collector.dump'] : $this->getDataCollector_DumpService()) && false ?: '_'});
        $instance->add(${($_ = isset($this->services['contao.data_collector']) ? $this->services['contao.data_collector'] : $this->getContao_DataCollectorService()) && false ?: '_'});
        $instance->add($e);

        return $instance;
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, 'contao_manager.routing_loader:loadFromPlugins', ['cache_dir' => $this->targetDirs[0], 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevDebugProjectContainerUrlMatcher', 'strict_requirements' => true, 'resource_type' => 'service'], ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'});

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->getConfigCacheFactoryService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, false);
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        $this->services['session'] = $instance = new \Symfony\Component\HttpFoundation\Session\Session(${($_ = isset($this->services['session.storage.native']) ? $this->services['session.storage.native'] : $this->getSession_Storage_NativeService()) && false ?: '_'}, new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());

        $instance->registerBag(${($_ = isset($this->services['contao.session.contao_backend']) ? $this->services['contao.session.contao_backend'] : $this->getContao_Session_ContaoBackendService()) && false ?: '_'});
        $instance->registerBag(${($_ = isset($this->services['contao.session.contao_frontend']) ? $this->services['contao.session.contao_frontend'] : $this->getContao_Session_ContaoFrontendService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator(new \Netzmacht\Contao\Toolkit\Translation\LangArrayTranslatorBagTranslator(new \Symfony\Component\Translation\LoggingTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.translation']) ? $this->services['monolog.logger.translation'] : $this->getMonolog_Logger_TranslationService()) && false ?: '_'}), ${($_ = isset($this->services['contao.framework']) ? $this->services['contao.framework'] : $this->getContao_FrameworkService()) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'}));
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig\Environment(${($_ = isset($this->services['twig.loader']) ? $this->services['twig.loader'] : $this->getTwig_LoaderService()) && false ?: '_'}, ['debug' => true, 'strict_variables' => true, 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8']);

        $a = ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'};
        $b = ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'};
        $c = ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'};
        $d = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);
        $d->setDisplayOptions(['fileLinkFormat' => $b]);
        $e = new \Knp\Menu\Util\MenuManipulator();
        $f = ${($_ = isset($this->services['knp_menu.matcher']) ? $this->services['knp_menu.matcher'] : $this->getKnpMenu_MatcherService()) && false ?: '_'};
        $g = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $g->setDisplayOptions(['maxStringLength' => 4096, 'fileLinkFormat' => $b]);
        $h = new \Symfony\Bridge\Twig\AppVariable();
        $h->setEnvironment('dev');
        $h->setDebug(true);
        if ($this->has('security.token_storage')) {
            $h->setTokenStorage(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'});
        }
        if ($this->has('request_stack')) {
            $h->setRequestStack($c);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : ($this->services['twig.profile'] = new \Twig\Profiler\Profile())) && false ?: '_'}, $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(${($_ = isset($this->services['assets.packages']) ? $this->services['assets.packages'] : $this->getAssets_PackagesService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($b, ($this->targetDirs[3].'/app'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($c, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension(${($_ = isset($this->services['var_dumper.cloner']) ? $this->services['var_dumper.cloner'] : $this->getVarDumper_ClonerService()) && false ?: '_'}, $d));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper(${($_ = isset($this->services['knp_menu.renderer_provider']) ? $this->services['knp_menu.renderer_provider'] : $this->getKnpMenu_RendererProviderService()) && false ?: '_'}, ${($_ = isset($this->services['knp_menu.menu_provider']) ? $this->services['knp_menu.menu_provider'] : $this->getKnpMenu_MenuProviderService()) && false ?: '_'}, $e, $f), $f, $e));
        $instance->addExtension(new \Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension(${($_ = isset($this->services['time.templating.helper.time']) ? $this->services['time.templating.helper.time'] : $this->getTime_Templating_Helper_TimeService()) && false ?: '_'}));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Nelmio\SecurityBundle\Twig\NelmioCSPTwigExtension(${($_ = isset($this->services['nelmio_security.csp_listener']) ? $this->services['nelmio_security.csp_listener'] : $this->getNelmioSecurity_CspListenerService()) && false ?: '_'}, ${($_ = isset($this->services['nelmio_security.sha_computer']) ? $this->services['nelmio_security.sha_computer'] : ($this->services['nelmio_security.sha_computer'] = new \Nelmio\SecurityBundle\ContentSecurityPolicy\ShaComputer('sha256'))) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($g));
        $instance->addExtension(${($_ = isset($this->services['contao.twig.template_extension']) ? $this->services['contao.twig.template_extension'] : $this->getContao_Twig_TemplateExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['contao.install_tool_twig_extension']) ? $this->services['contao.install_tool_twig_extension'] : ($this->services['contao.install_tool_twig_extension'] = new \SensioLabs\AnsiConverter\Bridge\Twig\AnsiExtension())) && false ?: '_'});
        $instance->addGlobal('app', $h);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(['Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
            return ${($_ = isset($this->services['twig.runtime.httpkernel']) ? $this->services['twig.runtime.httpkernel'] : $this->load('getTwig_Runtime_HttpkernelService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\FormRenderer' => function () {
            return ${($_ = isset($this->services['twig.form.renderer']) ? $this->services['twig.form.renderer'] : $this->load('getTwig_Form_RendererService.php')) && false ?: '_'};
        }])));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMinDepth(1);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the private 'assets.context' shared service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, '', false);
    }

    /**
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), ${($_ = isset($this->services['assets.context']) ? $this->services['assets.context'] : $this->getAssets_ContextService()) && false ?: '_'}), []);
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->services['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('qx7CyYR7no', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->services['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('JDglJSLKS3', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->services['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('ildE0TYLSj', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['dependency_injection.config.container_parameters_resource_checker']) ? $this->services['dependency_injection.config.container_parameters_resource_checker'] : ($this->services['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this))) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['config.resource.self_checking_resource_checker']) ? $this->services['config.resource.self_checking_resource_checker'] : ($this->services['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker())) && false ?: '_'};
        }, 2));
    }

    /**
     * Gets the private 'contao.cors_website_roots_config_provider' shared service.
     *
     * @return \Contao\CoreBundle\Cors\WebsiteRootsConfigProvider
     */
    protected function getContao_CorsWebsiteRootsConfigProviderService()
    {
        return $this->services['contao.cors_website_roots_config_provider'] = new \Contao\CoreBundle\Cors\WebsiteRootsConfigProvider(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'});
    }

    /**
     * Gets the private 'contao.data_collector' shared service.
     *
     * @return \Contao\CoreBundle\DataCollector\ContaoDataCollector
     */
    protected function getContao_DataCollectorService()
    {
        $this->services['contao.data_collector'] = $instance = new \Contao\CoreBundle\DataCollector\ContaoDataCollector($this->parameters['kernel.packages']);

        $instance->setFramework(${($_ = isset($this->services['contao.framework']) ? $this->services['contao.framework'] : $this->getContao_FrameworkService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'contao.doctrine.schema_provider' shared service.
     *
     * @return \Contao\CoreBundle\Doctrine\Schema\DcaSchemaProvider
     */
    protected function getContao_Doctrine_SchemaProviderService()
    {
        return $this->services['contao.doctrine.schema_provider'] = new \Contao\CoreBundle\Doctrine\Schema\DcaSchemaProvider(${($_ = isset($this->services['contao.framework']) ? $this->services['contao.framework'] : $this->getContao_FrameworkService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'contao.install_tool_twig_extension' shared service.
     *
     * @return \SensioLabs\AnsiConverter\Bridge\Twig\AnsiExtension
     */
    protected function getContao_InstallToolTwigExtensionService()
    {
        return $this->services['contao.install_tool_twig_extension'] = new \SensioLabs\AnsiConverter\Bridge\Twig\AnsiExtension();
    }

    /**
     * Gets the private 'contao.listener.bypass_maintenance' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\BypassMaintenanceListener
     */
    protected function getContao_Listener_BypassMaintenanceService()
    {
        return $this->services['contao.listener.bypass_maintenance'] = new \Contao\CoreBundle\EventListener\BypassMaintenanceListener(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, false);
    }

    /**
     * Gets the private 'contao.listener.doctrine_schema' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\DoctrineSchemaListener
     */
    protected function getContao_Listener_DoctrineSchemaService()
    {
        return $this->services['contao.listener.doctrine_schema'] = new \Contao\CoreBundle\EventListener\DoctrineSchemaListener(${($_ = isset($this->services['contao.doctrine.schema_provider']) ? $this->services['contao.doctrine.schema_provider'] : $this->getContao_Doctrine_SchemaProviderService()) && false ?: '_'});
    }

    /**
     * Gets the private 'contao.listener.insecure_installation' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\InsecureInstallationListener
     */
    protected function getContao_Listener_InsecureInstallationService()
    {
        return $this->services['contao.listener.insecure_installation'] = new \Contao\CoreBundle\EventListener\InsecureInstallationListener();
    }

    /**
     * Gets the private 'contao.listener.locale' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\LocaleListener
     */
    protected function getContao_Listener_LocaleService()
    {
        return $this->services['contao.listener.locale'] = \Contao\CoreBundle\EventListener\LocaleListener::createWithLocales(${($_ = isset($this->services['contao.routing.scope_matcher']) ? $this->services['contao.routing.scope_matcher'] : $this->getContao_Routing_ScopeMatcherService()) && false ?: '_'}, 'en', ($this->targetDirs[3].'/app'));
    }

    /**
     * Gets the private 'contao.listener.merge_http_headers' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\MergeHttpHeadersListener
     */
    protected function getContao_Listener_MergeHttpHeadersService()
    {
        return $this->services['contao.listener.merge_http_headers'] = new \Contao\CoreBundle\EventListener\MergeHttpHeadersListener(${($_ = isset($this->services['contao.framework']) ? $this->services['contao.framework'] : $this->getContao_FrameworkService()) && false ?: '_'});
    }

    /**
     * Gets the private 'contao.listener.referer_id' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\RefererIdListener
     */
    protected function getContao_Listener_RefererIdService()
    {
        return $this->services['contao.listener.referer_id'] = new \Contao\CoreBundle\EventListener\RefererIdListener(${($_ = isset($this->services['contao.referer_id.manager']) ? $this->services['contao.referer_id.manager'] : $this->getContao_RefererId_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['contao.routing.scope_matcher']) ? $this->services['contao.routing.scope_matcher'] : $this->getContao_Routing_ScopeMatcherService()) && false ?: '_'});
    }

    /**
     * Gets the private 'contao.listener.session_listener' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\SessionListener
     */
    protected function getContao_Listener_SessionListenerService()
    {
        return $this->services['contao.listener.session_listener'] = new \Contao\CoreBundle\EventListener\SessionListener(new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(['session' => function () {
            return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'};
        }])), ${($_ = isset($this->services['contao.framework']) ? $this->services['contao.framework'] : $this->getContao_FrameworkService()) && false ?: '_'}, ${($_ = isset($this->services['contao.routing.scope_matcher']) ? $this->services['contao.routing.scope_matcher'] : $this->getContao_Routing_ScopeMatcherService()) && false ?: '_'});
    }

    /**
     * Gets the private 'contao.listener.store_referer' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\StoreRefererListener
     */
    protected function getContao_Listener_StoreRefererService()
    {
        return $this->services['contao.listener.store_referer'] = new \Contao\CoreBundle\EventListener\StoreRefererListener(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : ($this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken'))) && false ?: '_'}, ${($_ = isset($this->services['contao.routing.scope_matcher']) ? $this->services['contao.routing.scope_matcher'] : $this->getContao_Routing_ScopeMatcherService()) && false ?: '_'});
    }

    /**
     * Gets the private 'contao.listener.toggle_view' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\ToggleViewListener
     */
    protected function getContao_Listener_ToggleViewService()
    {
        return $this->services['contao.listener.toggle_view'] = new \Contao\CoreBundle\EventListener\ToggleViewListener(${($_ = isset($this->services['contao.framework']) ? $this->services['contao.framework'] : $this->getContao_FrameworkService()) && false ?: '_'}, ${($_ = isset($this->services['contao.routing.scope_matcher']) ? $this->services['contao.routing.scope_matcher'] : $this->getContao_Routing_ScopeMatcherService()) && false ?: '_'});
    }

    /**
     * Gets the private 'contao.listener.user_session' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\UserSessionListener
     */
    protected function getContao_Listener_UserSessionService()
    {
        return $this->services['contao.listener.user_session'] = new \Contao\CoreBundle\EventListener\UserSessionListener(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : ($this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken'))) && false ?: '_'}, ${($_ = isset($this->services['contao.routing.scope_matcher']) ? $this->services['contao.routing.scope_matcher'] : $this->getContao_Routing_ScopeMatcherService()) && false ?: '_'});
    }

    /**
     * Gets the private 'contao.monolog.handler' shared service.
     *
     * @return \Contao\CoreBundle\Monolog\ContaoTableHandler
     */
    protected function getContao_Monolog_HandlerService()
    {
        $this->services['contao.monolog.handler'] = $instance = new \Contao\CoreBundle\Monolog\ContaoTableHandler('debug', false);

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the private 'contao.monolog.processor' shared service.
     *
     * @return \Contao\CoreBundle\Monolog\ContaoTableProcessor
     */
    protected function getContao_Monolog_ProcessorService()
    {
        return $this->services['contao.monolog.processor'] = new \Contao\CoreBundle\Monolog\ContaoTableProcessor(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['contao.routing.scope_matcher']) ? $this->services['contao.routing.scope_matcher'] : $this->getContao_Routing_ScopeMatcherService()) && false ?: '_'});
    }

    /**
     * Gets the private 'contao.referer_id.manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getContao_RefererId_ManagerService()
    {
        return $this->services['contao.referer_id.manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(${($_ = isset($this->services['contao.referer_id.token_generator']) ? $this->services['contao.referer_id.token_generator'] : ($this->services['contao.referer_id.token_generator'] = new \Contao\CoreBundle\Referer\TokenGenerator())) && false ?: '_'}, ${($_ = isset($this->services['security.csrf.token_storage']) ? $this->services['security.csrf.token_storage'] : $this->getSecurity_Csrf_TokenStorageService()) && false ?: '_'});
    }

    /**
     * Gets the private 'contao.referer_id.token_generator' shared service.
     *
     * @return \Contao\CoreBundle\Referer\TokenGenerator
     */
    protected function getContao_RefererId_TokenGeneratorService()
    {
        return $this->services['contao.referer_id.token_generator'] = new \Contao\CoreBundle\Referer\TokenGenerator();
    }

    /**
     * Gets the private 'contao.routing.backend_matcher' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getContao_Routing_BackendMatcherService()
    {
        $this->services['contao.routing.backend_matcher'] = $instance = new \Symfony\Component\HttpFoundation\RequestMatcher();

        $instance->matchAttribute('_scope', 'backend');

        return $instance;
    }

    /**
     * Gets the private 'contao.routing.frontend_matcher' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getContao_Routing_FrontendMatcherService()
    {
        $this->services['contao.routing.frontend_matcher'] = $instance = new \Symfony\Component\HttpFoundation\RequestMatcher();

        $instance->matchAttribute('_scope', 'frontend');

        return $instance;
    }

    /**
     * Gets the private 'contao.routing.scope_matcher' shared service.
     *
     * @return \Contao\CoreBundle\Routing\ScopeMatcher
     */
    protected function getContao_Routing_ScopeMatcherService()
    {
        return $this->services['contao.routing.scope_matcher'] = new \Contao\CoreBundle\Routing\ScopeMatcher(${($_ = isset($this->services['contao.routing.backend_matcher']) ? $this->services['contao.routing.backend_matcher'] : $this->getContao_Routing_BackendMatcherService()) && false ?: '_'}, ${($_ = isset($this->services['contao.routing.frontend_matcher']) ? $this->services['contao.routing.frontend_matcher'] : $this->getContao_Routing_FrontendMatcherService()) && false ?: '_'});
    }

    /**
     * Gets the private 'contao.session.contao_backend' shared service.
     *
     * @return \Contao\CoreBundle\Session\Attribute\ArrayAttributeBag
     */
    protected function getContao_Session_ContaoBackendService()
    {
        $this->services['contao.session.contao_backend'] = $instance = new \Contao\CoreBundle\Session\Attribute\ArrayAttributeBag('_contao_be_attributes');

        $instance->setName('contao_backend');

        return $instance;
    }

    /**
     * Gets the private 'contao.session.contao_frontend' shared service.
     *
     * @return \Contao\CoreBundle\Session\Attribute\ArrayAttributeBag
     */
    protected function getContao_Session_ContaoFrontendService()
    {
        $this->services['contao.session.contao_frontend'] = $instance = new \Contao\CoreBundle\Session\Attribute\ArrayAttributeBag('_contao_fe_attributes');

        $instance->setName('contao_frontend');

        return $instance;
    }

    /**
     * Gets the private 'contao.twig.template_extension' shared service.
     *
     * @return \Contao\CoreBundle\Twig\Extension\ContaoTemplateExtension
     */
    protected function getContao_Twig_TemplateExtensionService()
    {
        return $this->services['contao.twig.template_extension'] = new \Contao\CoreBundle\Twig\Extension\ContaoTemplateExtension(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, ${($_ = isset($this->services['contao.framework']) ? $this->services['contao.framework'] : $this->getContao_FrameworkService()) && false ?: '_'}, ${($_ = isset($this->services['contao.routing.scope_matcher']) ? $this->services['contao.routing.scope_matcher'] : $this->getContao_Routing_ScopeMatcherService()) && false ?: '_'});
    }

    /**
     * Gets the private 'controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'});
    }

    /**
     * Gets the private 'data_collector.request' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the private 'data_collector.router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the private 'data_collector.translation' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollector\TranslationDataCollector
     */
    protected function getDataCollector_TranslationService()
    {
        return $this->services['data_collector.translation'] = new \Symfony\Component\Translation\DataCollector\TranslationDataCollector(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.argument_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver
     */
    protected function getDebug_ArgumentResolverService()
    {
        return $this->services['debug.argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['argument_resolver.request_attribute']) ? $this->services['argument_resolver.request_attribute'] : ($this->services['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver())) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['argument_resolver.request']) ? $this->services['argument_resolver.request'] : ($this->services['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver())) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['argument_resolver.session']) ? $this->services['argument_resolver.session'] : ($this->services['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver())) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.user_value_resolver']) ? $this->services['security.user_value_resolver'] : $this->load('getSecurity_UserValueResolverService.php')) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['argument_resolver.service']) ? $this->services['argument_resolver.service'] : $this->load('getArgumentResolver_ServiceService.php')) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['argument_resolver.default']) ? $this->services['argument_resolver.default'] : ($this->services['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver())) && false ?: '_'};
            yield 6 => ${($_ = isset($this->services['argument_resolver.variadic']) ? $this->services['argument_resolver.variadic'] : ($this->services['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver())) && false ?: '_'};
        }, 7)), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.controller_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : ($this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'}), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->getDebug_ArgumentResolverService()) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ${($_ = isset($this->services['monolog.logger.php']) ? $this->services['monolog.logger.php'] : $this->getMonolog_Logger_PhpService()) && false ?: '_'}, -1, -1, true, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'debug.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.event']) ? $this->services['monolog.logger.event'] : $this->getMonolog_Logger_EventService()) && false ?: '_'});

        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['terminal42.header_replay.header_replay_listener']) ? $this->services['terminal42.header_replay.header_replay_listener'] : $this->getTerminal42_HeaderReplay_HeaderReplayListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], -2048);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ${($_ = isset($this->services['terminal42.header_replay.header_replay_stop_propagation_listener']) ? $this->services['terminal42.header_replay.header_replay_stop_propagation_listener'] : $this->load('getTerminal42_HeaderReplay_HeaderReplayStopPropagationListenerService.php')) && false ?: '_'};
        }, 1 => 'onKernelTerminate'], 2048);
        $instance->addListener('kernel.controller', [0 => function () {
            return ${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : ($this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector())) && false ?: '_'};
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['lexik_maintenance.listener']) ? $this->services['lexik_maintenance.listener'] : $this->getLexikMaintenance_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['lexik_maintenance.listener']) ? $this->services['lexik_maintenance.listener'] : $this->getLexikMaintenance_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['nelmio_cors.cors_listener']) ? $this->services['nelmio_cors.cors_listener'] : $this->getNelmioCors_CorsListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 250);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['nelmio_security.content_type_listener']) ? $this->services['nelmio_security.content_type_listener'] : ($this->services['nelmio_security.content_type_listener'] = new \Nelmio\SecurityBundle\EventListener\ContentTypeListener(true))) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['nelmio_security.referrer_policy_listener']) ? $this->services['nelmio_security.referrer_policy_listener'] : $this->getNelmioSecurity_ReferrerPolicyListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('contao_installation.initialize_application', [0 => function () {
            return ${($_ = isset($this->services['contao_manager.listener.initialize_application']) ? $this->services['contao_manager.listener.initialize_application'] : ($this->services['contao_manager.listener.initialize_application'] = new \Contao\ManagerBundle\EventListener\InitializeApplicationListener($this->targetDirs[3]))) && false ?: '_'};
        }, 1 => 'onInitializeApplication'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ${($_ = isset($this->services['contao_manager.listener.install_command']) ? $this->services['contao_manager.listener.install_command'] : ($this->services['contao_manager.listener.install_command'] = new \Contao\ManagerBundle\EventListener\InstallCommandListener($this->targetDirs[3]))) && false ?: '_'};
        }, 1 => 'onConsoleTerminate'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ${($_ = isset($this->services['contao.listener.add_to_search_index']) ? $this->services['contao.listener.add_to_search_index'] : $this->load('getContao_Listener_AddToSearchIndexService.php')) && false ?: '_'};
        }, 1 => 'onKernelTerminate'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['contao.listener.bypass_maintenance']) ? $this->services['contao.listener.bypass_maintenance'] : $this->getContao_Listener_BypassMaintenanceService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 10);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ${($_ = isset($this->services['contao.listener.command_scheduler']) ? $this->services['contao.listener.command_scheduler'] : $this->load('getContao_Listener_CommandSchedulerService.php')) && false ?: '_'};
        }, 1 => 'onKernelTerminate'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['contao.listener.exception_converter']) ? $this->services['contao.listener.exception_converter'] : ($this->services['contao.listener.exception_converter'] = new \Contao\CoreBundle\EventListener\ExceptionConverterListener())) && false ?: '_'};
        }, 1 => 'onKernelException'], 96);
        $instance->addListener('terminal42.header_replay', [0 => function () {
            return ${($_ = isset($this->services['contao.listener.header_replay.user_session']) ? $this->services['contao.listener.header_replay.user_session'] : $this->load('getContao_Listener_HeaderReplay_UserSessionService.php')) && false ?: '_'};
        }, 1 => 'onReplay'], 0);
        $instance->addListener('terminal42.header_replay', [0 => function () {
            return ${($_ = isset($this->services['contao.listener.header_replay.page_layout']) ? $this->services['contao.listener.header_replay.page_layout'] : $this->load('getContao_Listener_HeaderReplay_PageLayoutService.php')) && false ?: '_'};
        }, 1 => 'onReplay'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['contao.listener.insecure_installation']) ? $this->services['contao.listener.insecure_installation'] : ($this->services['contao.listener.insecure_installation'] = new \Contao\CoreBundle\EventListener\InsecureInstallationListener())) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['contao.listener.locale']) ? $this->services['contao.listener.locale'] : $this->getContao_Listener_LocaleService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 20);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['contao.listener.merge_http_headers']) ? $this->services['contao.listener.merge_http_headers'] : $this->getContao_Listener_MergeHttpHeadersService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 256);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['contao.listener.pretty_error_screens']) ? $this->services['contao.listener.pretty_error_screens'] : $this->load('getContao_Listener_PrettyErrorScreensService.php')) && false ?: '_'};
        }, 1 => 'onKernelException'], -96);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['contao.listener.referer_id']) ? $this->services['contao.listener.referer_id'] : $this->getContao_Listener_RefererIdService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 20);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['contao.listener.response_exception']) ? $this->services['contao.listener.response_exception'] : ($this->services['contao.listener.response_exception'] = new \Contao\CoreBundle\EventListener\ResponseExceptionListener())) && false ?: '_'};
        }, 1 => 'onKernelException'], 64);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['contao.listener.store_referer']) ? $this->services['contao.listener.store_referer'] : $this->getContao_Listener_StoreRefererService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['contao.listener.toggle_view']) ? $this->services['contao.listener.toggle_view'] : $this->getContao_Listener_ToggleViewService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['contao.listener.user_session']) ? $this->services['contao.listener.user_session'] : $this->getContao_Listener_UserSessionService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['contao.listener.user_session']) ? $this->services['contao.listener.user_session'] : $this->getContao_Listener_UserSessionService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('contao_installation.initialize_application', [0 => function () {
            return ${($_ = isset($this->services['contao.listener.initialize_application']) ? $this->services['contao.listener.initialize_application'] : $this->load('getContao_Listener_InitializeApplicationService.php')) && false ?: '_'};
        }, 1 => 'onInitialize'], 0);
        $instance->addListener('contao.preview_url_create', [0 => function () {
            return ${($_ = isset($this->services['contao_news.listener.preview_url_create']) ? $this->services['contao_news.listener.preview_url_create'] : $this->load('getContaoNews_Listener_PreviewUrlCreateService.php')) && false ?: '_'};
        }, 1 => 'onPreviewUrlCreate'], 0);
        $instance->addListener('contao.preview_url_convert', [0 => function () {
            return ${($_ = isset($this->services['contao_news.listener.preview_url_convert']) ? $this->services['contao_news.listener.preview_url_convert'] : $this->load('getContaoNews_Listener_PreviewUrlConvertService.php')) && false ?: '_'};
        }, 1 => 'onPreviewUrlConvert'], 0);
        $instance->addListener('netzmacht.contao_toolkit.view.get_template_helpers', [0 => function () {
            return ${($_ = isset($this->services['netzmacht.contao_toolkit.listeners.get_template_helpers']) ? $this->services['netzmacht.contao_toolkit.listeners.get_template_helpers'] : $this->load('getNetzmacht_ContaoToolkit_Listeners_GetTemplateHelpersService.php')) && false ?: '_'};
        }, 1 => 'handle'], 0);
        $instance->addListener('netzmacht.contao_toolkit.dca.create_formatter', [0 => function () {
            return ${($_ = isset($this->services['netzmacht.contao_toolkit.listeners.create_formatter_subscriber']) ? $this->services['netzmacht.contao_toolkit.listeners.create_formatter_subscriber'] : $this->load('getNetzmacht_ContaoToolkit_Listeners_CreateFormatterSubscriberService.php')) && false ?: '_'};
        }, 1 => 'handle'], 0);
        $instance->addListener('contao_bootstrap.core.build_context_config', [0 => function () {
            return ${($_ = isset($this->services['contao_bootstrap.grid.listeners.build_context_config']) ? $this->services['contao_bootstrap.grid.listeners.build_context_config'] : ($this->services['contao_bootstrap.grid.listeners.build_context_config'] = new \ContaoBootstrap\Grid\Listener\BuildContextConfigListener())) && false ?: '_'};
        }, 1 => 'buildThemeConfig'], 0);
        $instance->addListener('dc-general.factory.build-data-definition', [0 => function () {
            return ${($_ = isset($this->services['cca.meta_palettes.listeners.meta_models_builders']) ? $this->services['cca.meta_palettes.listeners.meta_models_builders'] : $this->load('getCca_MetaPalettes_Listeners_MetaModelsBuildersService.php')) && false ?: '_'};
        }, 1 => 'build'], 200);
        $instance->addListener('contao.preview_url_create', [0 => function () {
            return ${($_ = isset($this->services['contao_calendar.listener.preview_url_create']) ? $this->services['contao_calendar.listener.preview_url_create'] : $this->load('getContaoCalendar_Listener_PreviewUrlCreateService.php')) && false ?: '_'};
        }, 1 => 'onPreviewUrlCreate'], 0);
        $instance->addListener('contao.preview_url_convert', [0 => function () {
            return ${($_ = isset($this->services['contao_calendar.listener.preview_url_convert']) ? $this->services['contao_calendar.listener.preview_url_convert'] : $this->load('getContaoCalendar_Listener_PreviewUrlConvertService.php')) && false ?: '_'};
        }, 1 => 'onPreviewUrlConvert'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['response_listener']) ? $this->services['response_listener'] : ($this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8'))) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['streamed_response_listener']) ? $this->services['streamed_response_listener'] : ($this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener())) && false ?: '_'};
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['validate_request_listener']) ? $this->services['validate_request_listener'] : ($this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener())) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['resolve_controller_name_subscriber']) ? $this->services['resolve_controller_name_subscriber'] : $this->getResolveControllerNameSubscriberService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 24);
        $instance->addListener('console.error', [0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load('getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load('getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['session.save_listener']) ? $this->services['session.save_listener'] : ($this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener())) && false ?: '_'};
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['esi_listener']) ? $this->services['esi_listener'] : $this->getEsiListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['fragment.listener']) ? $this->services['fragment.listener'] : $this->getFragment_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 48);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->getTranslatorListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 10);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->getTranslatorListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->getProfilerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'], -100);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->getProfilerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->getProfilerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelTerminate'], -1024);
        $instance->addListener('kernel.controller', [0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : ($this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector())) && false ?: '_'};
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : ($this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector())) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->getDebug_DebugHandlersListenerService()) && false ?: '_'};
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->getDebug_DebugHandlersListenerService()) && false ?: '_'};
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['security.rememberme.response_listener']) ? $this->services['security.rememberme.response_listener'] : ($this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener())) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['twig.exception_listener']) ? $this->services['twig.exception_listener'] : $this->load('getTwig_ExceptionListenerService.php')) && false ?: '_'};
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('console.command', [0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'};
        }, 1 => 'onCommand'], 255);
        $instance->addListener('console.terminate', [0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'};
        }, 1 => 'onTerminate'], -255);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['nelmio_security.clickjacking_listener']) ? $this->services['nelmio_security.clickjacking_listener'] : $this->getNelmioSecurity_ClickjackingListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['nelmio_security.csp_listener']) ? $this->services['nelmio_security.csp_listener'] : $this->getNelmioSecurity_CspListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 512);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['nelmio_security.csp_listener']) ? $this->services['nelmio_security.csp_listener'] : $this->getNelmioSecurity_CspListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['nelmio_security.xss_protection_listener']) ? $this->services['nelmio_security.xss_protection_listener'] : $this->getNelmioSecurity_XssProtectionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('console.command', [0 => function () {
            return ${($_ = isset($this->services['debug.dump_listener']) ? $this->services['debug.dump_listener'] : $this->load('getDebug_DumpListenerService.php')) && false ?: '_'};
        }, 1 => 'configure'], 1024);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['web_profiler.debug_toolbar']) ? $this->services['web_profiler.debug_toolbar'] : $this->getWebProfiler_DebugToolbarService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['contao.listener.session_listener']) ? $this->services['contao.listener.session_listener'] : $this->getContao_Listener_SessionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['contao.listener.session_listener']) ? $this->services['contao.listener.session_listener'] : $this->getContao_Listener_SessionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['contao.listener.session_listener']) ? $this->services['contao.listener.session_listener'] : $this->getContao_Listener_SessionListenerService()) && false ?: '_'};
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('contao_bootstrap.core.initialize_environment', [0 => function () {
            return ${($_ = isset($this->services['contao_bootstrap.core.config_subscriber']) ? $this->services['contao_bootstrap.core.config_subscriber'] : $this->load('getContaoBootstrap_Core_ConfigSubscriberService.php')) && false ?: '_'};
        }, 1 => 'enterApplicationContext'], 0);
        $instance->addListener('contao_bootstrap.core.initialize_layout', [0 => function () {
            return ${($_ = isset($this->services['contao_bootstrap.core.config_subscriber']) ? $this->services['contao_bootstrap.core.config_subscriber'] : $this->load('getContaoBootstrap_Core_ConfigSubscriberService.php')) && false ?: '_'};
        }, 1 => 'enterThemeContext'], 0);
        $instance->addListener('contao_bootstrap.core.build_context_config', [0 => function () {
            return ${($_ = isset($this->services['contao_bootstrap.core.config_subscriber']) ? $this->services['contao_bootstrap.core.config_subscriber'] : $this->load('getContaoBootstrap_Core_ConfigSubscriberService.php')) && false ?: '_'};
        }, 1 => 'buildContextConfig'], 0);

        return $instance;
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, $this->targetDirs[3], function () {
            return ${($_ = isset($this->services['debug.file_link_formatter.url_format']) ? $this->services['debug.file_link_formatter.url_format'] : $this->load('getDebug_FileLinkFormatter_UrlFormatService.php')) && false ?: '_'};
        });
    }

    /**
     * Gets the private 'debug.log_processor' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor();
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->services['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.access.authenticated_voter']) ? $this->services['security.access.authenticated_voter'] : $this->load('getSecurity_Access_AuthenticatedVoterService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.access.simple_role_voter']) ? $this->services['security.access.simple_role_voter'] : ($this->services['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter())) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.access.expression_voter']) ? $this->services['security.access.expression_voter'] : $this->load('getSecurity_Access_ExpressionVoterService.php')) && false ?: '_'};
        }, 3), 'affirmative', false, true));
    }

    /**
     * Gets the private 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true);
    }

    /**
     * Gets the private 'doctrine.dbal.connection_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory($this->parameters['doctrine.dbal.connection_factory.types']);
    }

    /**
     * Gets the private 'doctrine.dbal.logger.profiling.default' shared service.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the private 'esi' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpCache\Esi
     */
    protected function getEsiService()
    {
        return $this->services['esi'] = new \Symfony\Component\HttpKernel\HttpCache\Esi();
    }

    /**
     * Gets the private 'esi_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SurrogateListener
     */
    protected function getEsiListenerService()
    {
        return $this->services['esi_listener'] = new \Symfony\Component\HttpKernel\EventListener\SurrogateListener(${($_ = isset($this->services['esi']) ? $this->services['esi'] : ($this->services['esi'] = new \Symfony\Component\HttpKernel\HttpCache\Esi())) && false ?: '_'});
    }

    /**
     * Gets the private 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}, ($this->targetDirs[3].'/app/Resources'), [0 => ($this->targetDirs[3].'/app')]);
    }

    /**
     * Gets the private 'fragment.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener(${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : ($this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('8a98de06ce2a5eb9e61bec05a99551074dea765a0f0d57defebd6711cfc04cf0'))) && false ?: '_'}, '/_fragment');
    }

    /**
     * Gets the private 'knp_menu.menu_provider' shared service.
     *
     * @return \Knp\Menu\Provider\ChainProvider
     */
    protected function getKnpMenu_MenuProviderService()
    {
        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['knp_menu.menu_provider.lazy']) ? $this->services['knp_menu.menu_provider.lazy'] : ($this->services['knp_menu.menu_provider.lazy'] = new \Knp\Menu\Provider\LazyProvider([]))) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['knp_menu.menu_provider.builder_alias']) ? $this->services['knp_menu.menu_provider.builder_alias'] : $this->load('getKnpMenu_MenuProvider_BuilderAliasService.php')) && false ?: '_'};
        }, 2));
    }

    /**
     * Gets the private 'knp_menu.renderer_provider' shared service.
     *
     * @return \Knp\Menu\Renderer\PsrProvider
     */
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Menu\Renderer\PsrProvider(new \Symfony\Component\DependencyInjection\ServiceLocator(['list' => function () {
            return ${($_ = isset($this->services['knp_menu.renderer.list']) ? $this->services['knp_menu.renderer.list'] : $this->load('getKnpMenu_Renderer_ListService.php')) && false ?: '_'};
        }, 'twig' => function () {
            return ${($_ = isset($this->services['knp_menu.renderer.twig']) ? $this->services['knp_menu.renderer.twig'] : $this->load('getKnpMenu_Renderer_TwigService.php')) && false ?: '_'};
        }]), 'twig');
    }

    /**
     * Gets the private 'lexik_maintenance.listener' shared service.
     *
     * @return \Lexik\Bundle\MaintenanceBundle\Listener\MaintenanceListener
     */
    protected function getLexikMaintenance_ListenerService()
    {
        return $this->services['lexik_maintenance.listener'] = new \Lexik\Bundle\MaintenanceBundle\Listener\MaintenanceListener(${($_ = isset($this->services['lexik_maintenance.driver.factory']) ? $this->services['lexik_maintenance.driver.factory'] : $this->getLexikMaintenance_Driver_FactoryService()) && false ?: '_'}, '^/contao($|/)', NULL, NULL, [], [], NULL, $this->parameters['lexik_maintenance.authorized.attributes'], 503, 'Service Temporarily Unavailable', 'Service Temporarily Unavailable', true);
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, 'en', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});
    }

    /**
     * Gets the private 'logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(${($_ = isset($this->services['contao.monolog.processor']) ? $this->services['contao.monolog.processor'] : $this->getContao_Monolog_ProcessorService()) && false ?: '_'});
        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : ($this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())) && false ?: '_'});
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['contao.monolog.handler']) ? $this->services['contao.monolog.handler'] : $this->getContao_Monolog_HandlerService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        $this->services['monolog.handler.console'] = $instance = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, [], []);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : ($this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor())) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\FingersCrossedHandler(${($_ = isset($this->services['monolog.handler.nested']) ? $this->services['monolog.handler.nested'] : $this->getMonolog_Handler_NestedService()) && false ?: '_'}, 400, 0, true, true, NULL);
    }

    /**
     * Gets the private 'monolog.handler.nested' shared service.
     *
     * @return \Monolog\Handler\RotatingFileHandler
     */
    protected function getMonolog_Handler_NestedService()
    {
        $this->services['monolog.handler.nested'] = $instance = new \Monolog\Handler\RotatingFileHandler(($this->targetDirs[2].'/logs/dev.log'), 10, 200, true, NULL);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : ($this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor())) && false ?: '_'});
        $instance->setFilenameFormat('{filename}-{date}', 'Y-m-d');

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->services['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(${($_ = isset($this->services['contao.monolog.processor']) ? $this->services['contao.monolog.processor'] : $this->getContao_Monolog_ProcessorService()) && false ?: '_'});
        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : ($this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['contao.monolog.handler']) ? $this->services['contao.monolog.handler'] : $this->getContao_Monolog_HandlerService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushProcessor(${($_ = isset($this->services['contao.monolog.processor']) ? $this->services['contao.monolog.processor'] : $this->getContao_Monolog_ProcessorService()) && false ?: '_'});
        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : ($this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['contao.monolog.handler']) ? $this->services['contao.monolog.handler'] : $this->getContao_Monolog_HandlerService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.event' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushProcessor(${($_ = isset($this->services['contao.monolog.processor']) ? $this->services['contao.monolog.processor'] : $this->getContao_Monolog_ProcessorService()) && false ?: '_'});
        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : ($this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['contao.monolog.handler']) ? $this->services['contao.monolog.handler'] : $this->getContao_Monolog_HandlerService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.php' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushProcessor(${($_ = isset($this->services['contao.monolog.processor']) ? $this->services['contao.monolog.processor'] : $this->getContao_Monolog_ProcessorService()) && false ?: '_'});
        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : ($this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['contao.monolog.handler']) ? $this->services['contao.monolog.handler'] : $this->getContao_Monolog_HandlerService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.profiler' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushProcessor(${($_ = isset($this->services['contao.monolog.processor']) ? $this->services['contao.monolog.processor'] : $this->getContao_Monolog_ProcessorService()) && false ?: '_'});
        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : ($this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['contao.monolog.handler']) ? $this->services['contao.monolog.handler'] : $this->getContao_Monolog_HandlerService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(${($_ = isset($this->services['contao.monolog.processor']) ? $this->services['contao.monolog.processor'] : $this->getContao_Monolog_ProcessorService()) && false ?: '_'});
        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : ($this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['contao.monolog.handler']) ? $this->services['contao.monolog.handler'] : $this->getContao_Monolog_HandlerService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.translation' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushProcessor(${($_ = isset($this->services['contao.monolog.processor']) ? $this->services['contao.monolog.processor'] : $this->getContao_Monolog_ProcessorService()) && false ?: '_'});
        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : ($this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['contao.monolog.handler']) ? $this->services['contao.monolog.handler'] : $this->getContao_Monolog_HandlerService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.processor.psr_log_message' shared service.
     *
     * @return \Monolog\Processor\PsrLogMessageProcessor
     */
    protected function getMonolog_Processor_PsrLogMessageService()
    {
        return $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor();
    }

    /**
     * Gets the private 'nelmio_cors.cors_listener' shared service.
     *
     * @return \Nelmio\CorsBundle\EventListener\CorsListener
     */
    protected function getNelmioCors_CorsListenerService()
    {
        return $this->services['nelmio_cors.cors_listener'] = new \Nelmio\CorsBundle\EventListener\CorsListener(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, new \Nelmio\CorsBundle\Options\Resolver([0 => ${($_ = isset($this->services['nelmio_cors.options_provider.config']) ? $this->services['nelmio_cors.options_provider.config'] : $this->getNelmioCors_OptionsProvider_ConfigService()) && false ?: '_'}, 1 => ${($_ = isset($this->services['contao.cors_website_roots_config_provider']) ? $this->services['contao.cors_website_roots_config_provider'] : $this->getContao_CorsWebsiteRootsConfigProviderService()) && false ?: '_'}]));
    }

    /**
     * Gets the private 'nelmio_cors.options_provider.config' shared service.
     *
     * @return \Nelmio\CorsBundle\Options\ConfigProvider
     */
    protected function getNelmioCors_OptionsProvider_ConfigService()
    {
        return $this->services['nelmio_cors.options_provider.config'] = new \Nelmio\CorsBundle\Options\ConfigProvider([], $this->parameters['nelmio_cors.defaults']);
    }

    /**
     * Gets the private 'nelmio_security.clickjacking_listener' shared service.
     *
     * @return \Nelmio\SecurityBundle\EventListener\ClickjackingListener
     */
    protected function getNelmioSecurity_ClickjackingListenerService()
    {
        return $this->services['nelmio_security.clickjacking_listener'] = new \Nelmio\SecurityBundle\EventListener\ClickjackingListener($this->parameters['nelmio_security.clickjacking.paths'], []);
    }

    /**
     * Gets the private 'nelmio_security.content_type_listener' shared service.
     *
     * @return \Nelmio\SecurityBundle\EventListener\ContentTypeListener
     */
    protected function getNelmioSecurity_ContentTypeListenerService()
    {
        return $this->services['nelmio_security.content_type_listener'] = new \Nelmio\SecurityBundle\EventListener\ContentTypeListener(true);
    }

    /**
     * Gets the private 'nelmio_security.csp_listener' shared service.
     *
     * @return \Nelmio\SecurityBundle\EventListener\ContentSecurityPolicyListener
     */
    protected function getNelmioSecurity_CspListenerService()
    {
        $a = new \Nelmio\SecurityBundle\ContentSecurityPolicy\PolicyManager();

        return $this->services['nelmio_security.csp_listener'] = new \Nelmio\SecurityBundle\EventListener\ContentSecurityPolicyListener(\Nelmio\SecurityBundle\ContentSecurityPolicy\DirectiveSet::fromConfig($a, ['enabled' => true, 'hosts' => [], 'content_types' => [], 'report_endpoint' => ['log_channel' => NULL, 'log_formatter' => 'nelmio_security.csp_report.log_formatter', 'log_level' => 'notice', 'filters' => ['domains' => true, 'schemes' => true, 'browser_bugs' => true, 'injected_scripts' => true], 'dismiss' => []], 'compat_headers' => true, 'report_logger_service' => 'logger', 'hash' => ['algorithm' => 'sha256']], 'report'), \Nelmio\SecurityBundle\ContentSecurityPolicy\DirectiveSet::fromConfig($a, ['enabled' => true, 'hosts' => [], 'content_types' => [], 'report_endpoint' => ['log_channel' => NULL, 'log_formatter' => 'nelmio_security.csp_report.log_formatter', 'log_level' => 'notice', 'filters' => ['domains' => true, 'schemes' => true, 'browser_bugs' => true, 'injected_scripts' => true], 'dismiss' => []], 'compat_headers' => true, 'report_logger_service' => 'logger', 'hash' => ['algorithm' => 'sha256']], 'enforce'), ${($_ = isset($this->services['nelmio_security.nonce_generator']) ? $this->services['nelmio_security.nonce_generator'] : ($this->services['nelmio_security.nonce_generator'] = new \Nelmio\SecurityBundle\ContentSecurityPolicy\NonceGenerator(16))) && false ?: '_'}, ${($_ = isset($this->services['nelmio_security.sha_computer']) ? $this->services['nelmio_security.sha_computer'] : ($this->services['nelmio_security.sha_computer'] = new \Nelmio\SecurityBundle\ContentSecurityPolicy\ShaComputer('sha256'))) && false ?: '_'}, true, [], []);
    }

    /**
     * Gets the private 'nelmio_security.nonce_generator' shared service.
     *
     * @return \Nelmio\SecurityBundle\ContentSecurityPolicy\NonceGenerator
     */
    protected function getNelmioSecurity_NonceGeneratorService()
    {
        return $this->services['nelmio_security.nonce_generator'] = new \Nelmio\SecurityBundle\ContentSecurityPolicy\NonceGenerator(16);
    }

    /**
     * Gets the private 'nelmio_security.referrer_policy_listener' shared service.
     *
     * @return \Nelmio\SecurityBundle\EventListener\ReferrerPolicyListener
     */
    protected function getNelmioSecurity_ReferrerPolicyListenerService()
    {
        return $this->services['nelmio_security.referrer_policy_listener'] = new \Nelmio\SecurityBundle\EventListener\ReferrerPolicyListener($this->parameters['nelmio_security.referrer_policy.policies']);
    }

    /**
     * Gets the private 'nelmio_security.sha_computer' shared service.
     *
     * @return \Nelmio\SecurityBundle\ContentSecurityPolicy\ShaComputer
     */
    protected function getNelmioSecurity_ShaComputerService()
    {
        return $this->services['nelmio_security.sha_computer'] = new \Nelmio\SecurityBundle\ContentSecurityPolicy\ShaComputer('sha256');
    }

    /**
     * Gets the private 'nelmio_security.xss_protection_listener' shared service.
     *
     * @return \Nelmio\SecurityBundle\EventListener\XssProtectionListener
     */
    protected function getNelmioSecurity_XssProtectionListenerService()
    {
        return $this->services['nelmio_security.xss_protection_listener'] = \Nelmio\SecurityBundle\EventListener\XssProtectionListener::fromConfig(['enabled' => true, 'mode_block' => true, 'report_uri' => NULL]);
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->getProfilerService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, NULL, false, false);
    }

    /**
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->services['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : ($this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'});
    }

    /**
     * Gets the private 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'}, $this->targetDirs[3], true);
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.authentication.provider.simple_preauth.backend']) ? $this->services['security.authentication.provider.simple_preauth.backend'] : $this->load('getSecurity_Authentication_Provider_SimplePreauth_BackendService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.authentication.provider.simple_preauth.frontend']) ? $this->services['security.authentication.provider.simple_preauth.frontend'] : $this->load('getSecurity_Authentication_Provider_SimplePreauth_FrontendService.php')) && false ?: '_'};
        }, 2), true);

        $instance->setEventDispatcher(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.trust_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the private 'security.csrf.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage
     */
    protected function getSecurity_Csrf_TokenStorageService()
    {
        return $this->services['security.csrf.token_storage'] = new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->services['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\ServiceLocator(['security.firewall.map.context.backend' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.backend']) ? $this->services['security.firewall.map.context.backend'] : $this->load('getSecurity_Firewall_Map_Context_BackendService.php')) && false ?: '_'};
        }, 'security.firewall.map.context.dev' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.dev']) ? $this->services['security.firewall.map.context.dev'] : $this->load('getSecurity_Firewall_Map_Context_DevService.php')) && false ?: '_'};
        }, 'security.firewall.map.context.frontend' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.frontend']) ? $this->services['security.firewall.map.context.frontend'] : $this->load('getSecurity_Firewall_Map_Context_FrontendService.php')) && false ?: '_'};
        }, 'security.firewall.map.context.install' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.install']) ? $this->services['security.firewall.map.context.install'] : $this->load('getSecurity_Firewall_Map_Context_InstallService.php')) && false ?: '_'};
        }]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ${($_ = isset($this->services['security.request_matcher.y.peoiw']) ? $this->services['security.request_matcher.y.peoiw'] : ($this->services['security.request_matcher.y.peoiw'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt|error)|css|images|js)/'))) && false ?: '_'};
            yield 'security.firewall.map.context.install' => ${($_ = isset($this->services['security.request_matcher.gsctxli']) ? $this->services['security.request_matcher.gsctxli'] : ($this->services['security.request_matcher.gsctxli'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(contao/install|install\\.php)'))) && false ?: '_'};
            yield 'security.firewall.map.context.backend' => ${($_ = isset($this->services['contao.routing.backend_matcher']) ? $this->services['contao.routing.backend_matcher'] : $this->getContao_Routing_BackendMatcherService()) && false ?: '_'};
            yield 'security.firewall.map.context.frontend' => ${($_ = isset($this->services['contao.routing.frontend_matcher']) ? $this->services['contao.routing.frontend_matcher'] : $this->getContao_Routing_FrontendMatcherService()) && false ?: '_'};
        }, 4));
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        return $this->services['security.logout_url_generator'] = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'});
    }

    /**
     * Gets the private 'security.rememberme.response_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]);
    }

    /**
     * Gets the private 'session.save_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the private 'session.storage.metadata_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the private 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], NULL, ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : ($this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0'))) && false ?: '_'});
    }

    /**
     * Gets the private 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : ($this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}, ($this->targetDirs[3].'/app/Resources'), [0 => ($this->targetDirs[3].'/app')]))) && false ?: '_'}, $this->targetDirs[0]);
    }

    /**
     * Gets the private 'templating.name_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'});
    }

    /**
     * Gets the private 'terminal42.header_replay.header_replay_listener' shared service.
     *
     * @return \Terminal42\HeaderReplay\EventListener\HeaderReplayListener
     */
    protected function getTerminal42_HeaderReplay_HeaderReplayListenerService()
    {
        return $this->services['terminal42.header_replay.header_replay_listener'] = new \Terminal42\HeaderReplay\EventListener\HeaderReplayListener(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});
    }

    /**
     * Gets the private 'time.datetime_formatter' shared service.
     *
     * @return \Knp\Bundle\TimeBundle\DateTimeFormatter
     */
    protected function getTime_DatetimeFormatterService()
    {
        return $this->services['time.datetime_formatter'] = new \Knp\Bundle\TimeBundle\DateTimeFormatter(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
    }

    /**
     * Gets the private 'time.templating.helper.time' shared service.
     *
     * @return \Knp\Bundle\TimeBundle\Templating\Helper\TimeHelper
     */
    protected function getTime_Templating_Helper_TimeService()
    {
        return $this->services['time.templating.helper.time'] = new \Knp\Bundle\TimeBundle\Templating\Helper\TimeHelper(${($_ = isset($this->services['time.datetime_formatter']) ? $this->services['time.datetime_formatter'] : $this->getTime_DatetimeFormatterService()) && false ?: '_'});
    }

    /**
     * Gets the private 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\ServiceLocator(['translation.loader.csv' => function () {
            return ${($_ = isset($this->services['translation.loader.csv']) ? $this->services['translation.loader.csv'] : ($this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader())) && false ?: '_'};
        }, 'translation.loader.dat' => function () {
            return ${($_ = isset($this->services['translation.loader.dat']) ? $this->services['translation.loader.dat'] : ($this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader())) && false ?: '_'};
        }, 'translation.loader.ini' => function () {
            return ${($_ = isset($this->services['translation.loader.ini']) ? $this->services['translation.loader.ini'] : ($this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader())) && false ?: '_'};
        }, 'translation.loader.json' => function () {
            return ${($_ = isset($this->services['translation.loader.json']) ? $this->services['translation.loader.json'] : ($this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader())) && false ?: '_'};
        }, 'translation.loader.mo' => function () {
            return ${($_ = isset($this->services['translation.loader.mo']) ? $this->services['translation.loader.mo'] : ($this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader())) && false ?: '_'};
        }, 'translation.loader.php' => function () {
            return ${($_ = isset($this->services['translation.loader.php']) ? $this->services['translation.loader.php'] : ($this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader())) && false ?: '_'};
        }, 'translation.loader.po' => function () {
            return ${($_ = isset($this->services['translation.loader.po']) ? $this->services['translation.loader.po'] : ($this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader())) && false ?: '_'};
        }, 'translation.loader.qt' => function () {
            return ${($_ = isset($this->services['translation.loader.qt']) ? $this->services['translation.loader.qt'] : ($this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader())) && false ?: '_'};
        }, 'translation.loader.res' => function () {
            return ${($_ = isset($this->services['translation.loader.res']) ? $this->services['translation.loader.res'] : ($this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader())) && false ?: '_'};
        }, 'translation.loader.xliff' => function () {
            return ${($_ = isset($this->services['translation.loader.xliff']) ? $this->services['translation.loader.xliff'] : ($this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader())) && false ?: '_'};
        }, 'translation.loader.yml' => function () {
            return ${($_ = isset($this->services['translation.loader.yml']) ? $this->services['translation.loader.yml'] : ($this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader())) && false ?: '_'};
        }]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\MessageSelector()), 'en', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => true, 'resource_files' => ['af' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf')], 'ar' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ar.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.ar.xliff')], 'az' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.az.xlf')], 'be' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.be.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.be.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.be.xlf')], 'bg' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.bg.xlf')], 'ca' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ca.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.ca.xliff')], 'cs' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.cs.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.cs.xliff'), 4 => ($this->targetDirs[3].'/vendor/contao/installation-bundle/src/Resources/translations/messages.cs.xlf')], 'cy' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf')], 'da' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.da.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.da.xliff')], 'de' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.de.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.de.xliff'), 4 => ($this->targetDirs[3].'/vendor/contao/installation-bundle/src/Resources/translations/messages.de.xlf')], 'el' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.el.xlf')], 'en' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.en.xliff'), 4 => ($this->targetDirs[3].'/vendor/lexik/maintenance-bundle/Resources/translations/maintenance.en.yml'), 5 => ($this->targetDirs[3].'/vendor/contao/installation-bundle/src/Resources/translations/messages.en.xlf')], 'es' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.es.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.es.xliff'), 4 => ($this->targetDirs[3].'/vendor/contao/installation-bundle/src/Resources/translations/messages.es.xlf')], 'et' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf')], 'eu' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.eu.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.eu.xliff')], 'fa' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fa.xlf')], 'fi' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf'), 2 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.fi.xliff')], 'fr' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.fr.xliff'), 4 => ($this->targetDirs[3].'/vendor/lexik/maintenance-bundle/Resources/translations/maintenance.fr.yml'), 5 => ($this->targetDirs[3].'/vendor/contao/installation-bundle/src/Resources/translations/messages.fr.xlf')], 'gl' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.gl.xlf')], 'he' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.he.xlf')], 'hr' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hr.xlf')], 'hu' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hu.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.hu.xliff')], 'hy' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf')], 'id' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.id.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.id.xliff')], 'it' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.it.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.it.xliff'), 4 => ($this->targetDirs[3].'/vendor/contao/installation-bundle/src/Resources/translations/messages.it.xlf')], 'ja' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ja.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.ja.xliff'), 4 => ($this->targetDirs[3].'/vendor/contao/installation-bundle/src/Resources/translations/messages.ja.xlf')], 'lb' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lb.xlf')], 'lt' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lt.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.lt.xliff')], 'lv' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lv.xlf')], 'mn' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf')], 'nb' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nb.xlf')], 'nl' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nl.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.nl.xliff'), 4 => ($this->targetDirs[3].'/vendor/contao/installation-bundle/src/Resources/translations/messages.nl.xlf')], 'nn' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nn.xlf')], 'no' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.no.xlf')], 'pl' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pl.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.pl.xliff')], 'pt' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf'), 2 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.pt.xliff'), 3 => ($this->targetDirs[3].'/vendor/contao/installation-bundle/src/Resources/translations/messages.pt.xlf')], 'pt_BR' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_BR.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.pt_BR.xliff')], 'ro' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ro.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.ro.xliff')], 'ru' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ru.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.ru.xliff'), 4 => ($this->targetDirs[3].'/vendor/contao/installation-bundle/src/Resources/translations/messages.ru.xlf')], 'sk' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sk.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.sk.xliff')], 'sl' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sl.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.sl.xliff')], 'sq' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf')], 'sr_Cyrl' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Latn.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.sr_Latn.xliff')], 'sv' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sv.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.sv.xliff')], 'th' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.th.xlf')], 'tl' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.tl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tl.xlf')], 'tr' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.tr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tr.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.tr.xliff'), 4 => ($this->targetDirs[3].'/vendor/contao/installation-bundle/src/Resources/translations/messages.tr.xlf')], 'uk' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.uk.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.uk.xliff')], 'vi' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.vi.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.vi.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.vi.xliff')], 'zh_CN' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.zh_CN.xlf'), 3 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.zh_CN.xliff')], 'zh_TW' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf'), 1 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.zh_TW.xliff')], 'pt_PT' => [0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_PT.xlf'), 1 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.pt_PT.xliff')], 'bs_Latn_BA' => [0 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.bs_Latn_BA.xliff')], 'eo' => [0 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.eo.xliff')], 'hr_HR' => [0 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.hr_HR.xliff')], 'ky' => [0 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.ky.xliff')], 'sr_Latin' => [0 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.sr_Latin.xliff')], 'zh' => [0 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.zh.xliff'), 1 => ($this->targetDirs[3].'/vendor/contao/installation-bundle/src/Resources/translations/messages.zh.xlf')], 'zh_HK' => [0 => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle/Resources/translations/time.zh_HK.xliff')], 'sr' => [0 => ($this->targetDirs[3].'/vendor/contao/installation-bundle/src/Resources/translations/messages.sr.xlf')]]]);

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->getConfigCacheFactoryService()) && false ?: '_'});
        $instance->setFallbackLocales([0 => 'en']);

        return $instance;
    }

    /**
     * Gets the private 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'});
    }

    /**
     * Gets the private 'twig.loader' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : ($this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'}, $this->targetDirs[3]);

        $instance->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle/src/Resources/views'), 'KnpMenu');
        $instance->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle/src/Resources/views'), '!KnpMenu');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), '!Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), '!Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), '!Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), 'Debug');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), '!Debug');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), 'WebProfiler');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), '!WebProfiler');
        $instance->addPath(($this->targetDirs[3].'/app/Resources/ContaoCoreBundle/views'), 'ContaoCore');
        $instance->addPath(($this->targetDirs[3].'/vendor/contao/core-bundle/src/Resources/views'), 'ContaoCore');
        $instance->addPath(($this->targetDirs[3].'/vendor/contao/core-bundle/src/Resources/views'), '!ContaoCore');
        $instance->addPath(($this->targetDirs[3].'/vendor/contao/installation-bundle/src/Resources/views'), 'ContaoInstallation');
        $instance->addPath(($this->targetDirs[3].'/vendor/contao/installation-bundle/src/Resources/views'), '!ContaoInstallation');
        $instance->addPath(($this->targetDirs[3].'/vendor/contao-themes-net/mate-theme-bundle/src/Resources/views'), 'MateTheme');
        $instance->addPath(($this->targetDirs[3].'/vendor/contao-themes-net/mate-theme-bundle/src/Resources/views'), '!MateTheme');

        return $instance;
    }

    /**
     * Gets the private 'twig.profile' shared service.
     *
     * @return \Twig\Profiler\Profile
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /**
     * Gets the private 'uri_signer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('8a98de06ce2a5eb9e61bec05a99551074dea765a0f0d57defebd6711cfc04cf0');
    }

    /**
     * Gets the private 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->services['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * Gets the private 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}, false, 2, 'bottom', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, '^/((index|app(_[\\w]+)?)\\.php/)?_wdt', ${($_ = isset($this->services['web_profiler.csp.handler']) ? $this->services['web_profiler.csp.handler'] : $this->getWebProfiler_Csp_HandlerService()) && false ?: '_'});
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'session.save_path' => false,
        'translator.default_path' => false,
        'profiler.storage.dsn' => false,
        'debug.container.dump' => false,
        'twig.default_path' => false,
        'lexik_maintenance.driver' => false,
        'contao.web_dir' => false,
        'contao.image.target_dir' => false,
        'contao.resources_paths' => false,
    ];
    private $dynamicParameters = [];

    /**
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'/app'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/logs'); break;
            case 'kernel.bundles_metadata': $value = [
                'KnpMenuBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle/src'),
                    'namespace' => 'Knp\\Bundle\\MenuBundle',
                ],
                'KnpTimeBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/knplabs/knp-time-bundle/Knp/Bundle/TimeBundle'),
                    'namespace' => 'Knp\\Bundle\\TimeBundle',
                ],
                'HeaderReplayBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/terminal42/header-replay-bundle/src'),
                    'namespace' => 'Terminal42\\HeaderReplay',
                ],
                'FrameworkBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'SecurityBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'TwigBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'MonologBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'SwiftmailerBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ],
                'DoctrineBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'DoctrineCacheBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-cache-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineCacheBundle',
                ],
                'LexikMaintenanceBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/lexik/maintenance-bundle'),
                    'namespace' => 'Lexik\\Bundle\\MaintenanceBundle',
                ],
                'NelmioCorsBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/nelmio/cors-bundle'),
                    'namespace' => 'Nelmio\\CorsBundle',
                ],
                'NelmioSecurityBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/nelmio/security-bundle'),
                    'namespace' => 'Nelmio\\SecurityBundle',
                ],
                'ContaoManagerBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/contao/manager-bundle/src'),
                    'namespace' => 'Contao\\ManagerBundle',
                ],
                'DebugBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ],
                'WebProfilerBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ],
                'SensioDistributionBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/distribution-bundle'),
                    'namespace' => 'Sensio\\Bundle\\DistributionBundle',
                ],
                'ContaoCoreBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/contao/core-bundle/src'),
                    'namespace' => 'Contao\\CoreBundle',
                ],
                'ContaoFaqBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/contao/faq-bundle/src'),
                    'namespace' => 'Contao\\FaqBundle',
                ],
                'ContaoInstallationBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/contao/installation-bundle/src'),
                    'namespace' => 'Contao\\InstallationBundle',
                ],
                'ContaoListingBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/contao/listing-bundle/src'),
                    'namespace' => 'Contao\\ListingBundle',
                ],
                'ContaoNewsBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/contao/news-bundle/src'),
                    'namespace' => 'Contao\\NewsBundle',
                ],
                'ContaoNewsletterBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/contao/newsletter-bundle/src'),
                    'namespace' => 'Contao\\NewsletterBundle',
                ],
                'RockSolidColumnsBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/madeyourday/contao-rocksolid-columns/src'),
                    'namespace' => 'MadeYourDay\\RockSolidColumns',
                ],
                'RockSolidCustomElementsBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/madeyourday/contao-rocksolid-custom-elements/src'),
                    'namespace' => 'MadeYourDay\\RockSolidCustomElements',
                ],
                'RockSolidIconPickerBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/madeyourday/contao-rocksolid-icon-picker/src'),
                    'namespace' => 'MadeYourDay\\RockSolidIconPicker',
                ],
                'RockSolidSliderBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/madeyourday/contao-rocksolid-slider/src'),
                    'namespace' => 'MadeYourDay\\RockSolidSlider',
                ],
                'NetzmachtContaoToolkitBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/netzmacht/contao-toolkit/src/Bundle'),
                    'namespace' => 'Netzmacht\\Contao\\Toolkit\\Bundle',
                ],
                'ThemeHelperBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/pdir/contao-theme-helper-bundle/src'),
                    'namespace' => 'Pdir\\ThemeHelperBundle',
                ],
                'Terminal42FolderpageBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/terminal42/contao-folderpage/src'),
                    'namespace' => 'Terminal42\\FolderpageBundle',
                ],
                'exams' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/system/modules/exams'),
                    'namespace' => 'Contao\\CoreBundle\\HttpKernel\\Bundle',
                ],
                'ContaoBootstrapCoreBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/contao-bootstrap/core/src'),
                    'namespace' => 'ContaoBootstrap\\Core',
                ],
                'ContaoBootstrapGridBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/contao-bootstrap/grid/src'),
                    'namespace' => 'ContaoBootstrap\\Grid',
                ],
                'CcaMetaPalettesBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/contao-community-alliance/meta-palettes/src'),
                    'namespace' => 'ContaoCommunityAlliance\\MetaPalettes',
                ],
                'ContaoDDAdvancedClassesBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/contao-dd/advanced-classes-bundle/src'),
                    'namespace' => 'ContaoDD\\AdvancedClassesBundle',
                ],
                'MateThemeBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/contao-themes-net/mate-theme-bundle/src'),
                    'namespace' => 'ContaoThemesNet\\MateThemeBundle',
                ],
                'ContaoThemesNetMaterialIconsInserttagBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/contao-themes-net/material-icons-inserttag/src'),
                    'namespace' => 'ContaoThemesNet\\MaterialIconsInserttag',
                ],
                'ContaoCalendarBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/contao/calendar-bundle/src'),
                    'namespace' => 'Contao\\CalendarBundle',
                ],
                'ContaoCommentsBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/contao/comments-bundle/src'),
                    'namespace' => 'Contao\\CommentsBundle',
                ],
                'multicolumnwizard' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/system/modules/multicolumnwizard'),
                    'namespace' => 'Contao\\CoreBundle\\HttpKernel\\Bundle',
                ],
            ]; break;
            case 'session.save_path': $value = ($this->targetDirs[0].'/sessions'); break;
            case 'translator.default_path': $value = ($this->targetDirs[3].'/translations'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDirs[0].'/profiler'); break;
            case 'debug.container.dump': $value = ($this->targetDirs[0].'/appDevDebugProjectContainer.xml'); break;
            case 'twig.default_path': $value = ($this->targetDirs[3].'/app/Resources/views'); break;
            case 'lexik_maintenance.driver': $value = [
                'class' => 'Lexik\\Bundle\\MaintenanceBundle\\Drivers\\FileDriver',
                'options' => [
                    'file_path' => ($this->targetDirs[2].'/maintenance_lock'),
                ],
                'ttl' => NULL,
            ]; break;
            case 'contao.web_dir': $value = ($this->targetDirs[3].'/web'); break;
            case 'contao.image.target_dir': $value = ($this->targetDirs[3].'/assets/images'); break;
            case 'contao.resources_paths': $value = [
                0 => ($this->targetDirs[3].'/vendor/contao/core-bundle/src/Resources/contao'),
                1 => ($this->targetDirs[3].'/vendor/contao/faq-bundle/src/Resources/contao'),
                2 => ($this->targetDirs[3].'/vendor/contao/listing-bundle/src/Resources/contao'),
                3 => ($this->targetDirs[3].'/vendor/contao/news-bundle/src/Resources/contao'),
                4 => ($this->targetDirs[3].'/vendor/contao/newsletter-bundle/src/Resources/contao'),
                5 => ($this->targetDirs[3].'/vendor/madeyourday/contao-rocksolid-columns/src/Resources/contao'),
                6 => ($this->targetDirs[3].'/vendor/madeyourday/contao-rocksolid-custom-elements/src/Resources/contao'),
                7 => ($this->targetDirs[3].'/vendor/madeyourday/contao-rocksolid-icon-picker/src/Resources/contao'),
                8 => ($this->targetDirs[3].'/vendor/madeyourday/contao-rocksolid-slider/src/Resources/contao'),
                9 => ($this->targetDirs[3].'/vendor/netzmacht/contao-toolkit/src/Bundle/Resources/contao'),
                10 => ($this->targetDirs[3].'/vendor/pdir/contao-theme-helper-bundle/src/Resources/contao'),
                11 => ($this->targetDirs[3].'/vendor/terminal42/contao-folderpage/src/Resources/contao'),
                12 => ($this->targetDirs[3].'/system/modules/exams'),
                13 => ($this->targetDirs[3].'/vendor/contao-bootstrap/core/src/Resources/contao'),
                14 => ($this->targetDirs[3].'/vendor/contao-bootstrap/grid/src/Resources/contao'),
                15 => ($this->targetDirs[3].'/vendor/contao-community-alliance/meta-palettes/src/Resources/contao'),
                16 => ($this->targetDirs[3].'/vendor/contao-dd/advanced-classes-bundle/src/Resources/contao'),
                17 => ($this->targetDirs[3].'/vendor/contao-themes-net/mate-theme-bundle/src/Resources/contao'),
                18 => ($this->targetDirs[3].'/vendor/contao-themes-net/material-icons-inserttag/src/Resources/contao'),
                19 => ($this->targetDirs[3].'/vendor/contao/calendar-bundle/src/Resources/contao'),
                20 => ($this->targetDirs[3].'/vendor/contao/comments-bundle/src/Resources/contao'),
                21 => ($this->targetDirs[3].'/system/modules/multicolumnwizard'),
                22 => ($this->targetDirs[3].'/app/Resources/contao'),
            ]; break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    private $normalizedParameterNames = [];

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.bundles' => [
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'KnpTimeBundle' => 'Knp\\Bundle\\TimeBundle\\KnpTimeBundle',
                'HeaderReplayBundle' => 'Terminal42\\HeaderReplay\\HeaderReplayBundle',
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineCacheBundle' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle',
                'LexikMaintenanceBundle' => 'Lexik\\Bundle\\MaintenanceBundle\\LexikMaintenanceBundle',
                'NelmioCorsBundle' => 'Nelmio\\CorsBundle\\NelmioCorsBundle',
                'NelmioSecurityBundle' => 'Nelmio\\SecurityBundle\\NelmioSecurityBundle',
                'ContaoManagerBundle' => 'Contao\\ManagerBundle\\ContaoManagerBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'ContaoCoreBundle' => 'Contao\\CoreBundle\\ContaoCoreBundle',
                'ContaoFaqBundle' => 'Contao\\FaqBundle\\ContaoFaqBundle',
                'ContaoInstallationBundle' => 'Contao\\InstallationBundle\\ContaoInstallationBundle',
                'ContaoListingBundle' => 'Contao\\ListingBundle\\ContaoListingBundle',
                'ContaoNewsBundle' => 'Contao\\NewsBundle\\ContaoNewsBundle',
                'ContaoNewsletterBundle' => 'Contao\\NewsletterBundle\\ContaoNewsletterBundle',
                'RockSolidColumnsBundle' => 'MadeYourDay\\RockSolidColumns\\RockSolidColumnsBundle',
                'RockSolidCustomElementsBundle' => 'MadeYourDay\\RockSolidCustomElements\\RockSolidCustomElementsBundle',
                'RockSolidIconPickerBundle' => 'MadeYourDay\\RockSolidIconPicker\\RockSolidIconPickerBundle',
                'RockSolidSliderBundle' => 'MadeYourDay\\RockSolidSlider\\RockSolidSliderBundle',
                'NetzmachtContaoToolkitBundle' => 'Netzmacht\\Contao\\Toolkit\\Bundle\\NetzmachtContaoToolkitBundle',
                'ThemeHelperBundle' => 'Pdir\\ThemeHelperBundle\\ThemeHelperBundle',
                'Terminal42FolderpageBundle' => 'Terminal42\\FolderpageBundle\\Terminal42FolderpageBundle',
                'exams' => 'Contao\\CoreBundle\\HttpKernel\\Bundle\\ContaoModuleBundle',
                'ContaoBootstrapCoreBundle' => 'ContaoBootstrap\\Core\\ContaoBootstrapCoreBundle',
                'ContaoBootstrapGridBundle' => 'ContaoBootstrap\\Grid\\ContaoBootstrapGridBundle',
                'CcaMetaPalettesBundle' => 'ContaoCommunityAlliance\\MetaPalettes\\CcaMetaPalettesBundle',
                'ContaoDDAdvancedClassesBundle' => 'ContaoDD\\AdvancedClassesBundle\\ContaoDDAdvancedClassesBundle',
                'MateThemeBundle' => 'ContaoThemesNet\\MateThemeBundle\\MateThemeBundle',
                'ContaoThemesNetMaterialIconsInserttagBundle' => 'ContaoThemesNet\\MaterialIconsInserttag\\ContaoThemesNetMaterialIconsInserttagBundle',
                'ContaoCalendarBundle' => 'Contao\\CalendarBundle\\ContaoCalendarBundle',
                'ContaoCommentsBundle' => 'Contao\\CommentsBundle\\ContaoCommentsBundle',
                'multicolumnwizard' => 'Contao\\CoreBundle\\HttpKernel\\Bundle\\ContaoModuleBundle',
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'database_host' => 'localhost',
            'database_port' => 3306,
            'database_user' => 'ullrich',
            'database_password' => 'bachelor2019!',
            'database_name' => 'ullrich',
            'secret' => '8a98de06ce2a5eb9e61bec05a99551074dea765a0f0d57defebd6711cfc04cf0',
            'locale' => 'en',
            'prepend_locale' => false,
            'mailer_transport' => 'mail',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'mailer_port' => 25,
            'mailer_encryption' => NULL,
            'knp_menu.factory.class' => 'Knp\\Menu\\MenuFactory',
            'knp_menu.factory_extension.routing.class' => 'Knp\\Menu\\Integration\\Symfony\\RoutingExtension',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.matcher.class' => 'Knp\\Menu\\Matcher\\Matcher',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => [

            ],
            'knp_menu.listener.voters.class' => 'Knp\\Bundle\\MenuBundle\\EventListener\\VoterInitializerListener',
            'knp_menu.voter.router.class' => 'Knp\\Menu\\Matcher\\Voter\\RouteVoter',
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => [

            ],
            'knp_menu.renderer.twig.template' => '@KnpMenu/menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'time.templating.helper.time.class' => 'Knp\\Bundle\\TimeBundle\\Templating\\Helper\\TimeHelper',
            'time.datetime_formatter.class' => 'Knp\\Bundle\\TimeBundle\\DateTimeFormatter',
            'time.twig.extension.time.class' => 'Knp\\Bundle\\TimeBundle\\Twig\\Extension\\TimeExtension',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => '8a98de06ce2a5eb9e61bec05a99551074dea765a0f0d57defebd6711cfc04cf0',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_httponly' => true,
                'gc_probability' => 1,
                'use_strict_mode' => true,
            ],
            'session.metadata.update_threshold' => '0',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => [
                0 => 'twig',
                1 => 'toolkit',
            ],
            'translator.logging' => true,
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => -1,
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'appDevDebugProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appDevDebugProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'contao_manager.routing_loader:loadFromPlugins',
            'router.cache_class_prefix' => 'appDevDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => [

            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => [
                0 => 'form_div_layout.html.twig',
            ],
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.console' => NULL,
                'monolog.handler.main' => NULL,
                'monolog.handler.contao' => NULL,
            ],
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
            'swiftmailer.mailer.default.transport.name' => 'mail',
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.mailer.default.spool.enabled' => false,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => false,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => [
                'default' => 'swiftmailer.mailer.default',
            ],
            'swiftmailer.default_mailer' => 'default',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [

            ],
            'doctrine.default_entity_manager' => '',
            'doctrine.dbal.connection_factory.types' => [
                'binary_string' => [
                    'class' => 'Contao\\CoreBundle\\Doctrine\\DBAL\\Types\\BinaryStringType',
                    'commented' => true,
                ],
            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'lexik_maintenance.listener.class' => 'Lexik\\Bundle\\MaintenanceBundle\\Listener\\MaintenanceListener',
            'lexik_maintenance.driver_factory.class' => 'Lexik\\Bundle\\MaintenanceBundle\\Drivers\\DriverFactory',
            'lexik_maintenance.driver.database.class' => 'Lexik\\Bundle\\MaintenanceBundle\\Drivers\\DatabaseDriver',
            'lexik_maintenance.authorized.path' => '^/contao($|/)',
            'lexik_maintenance.authorized.host' => NULL,
            'lexik_maintenance.authorized.ips' => NULL,
            'lexik_maintenance.authorized.query' => [

            ],
            'lexik_maintenance.authorized.cookie' => [

            ],
            'lexik_maintenance.authorized.route' => NULL,
            'lexik_maintenance.authorized.attributes' => [
                '_bypass_maintenance' => true,
            ],
            'lexik_maintenance.response.http_code' => 503,
            'lexik_maintenance.response.http_status' => 'Service Temporarily Unavailable',
            'lexik_maintenance.response.exception_message' => 'Service Temporarily Unavailable',
            'nelmio_cors.map' => [

            ],
            'nelmio_cors.defaults' => [
                'allow_origin' => [

                ],
                'allow_credentials' => false,
                'allow_headers' => [

                ],
                'expose_headers' => [

                ],
                'allow_methods' => [

                ],
                'max_age' => 0,
                'hosts' => [

                ],
                'origin_regex' => false,
                'forced_allow_origin_value' => NULL,
            ],
            'nelmio_cors.cors_listener.class' => 'Nelmio\\CorsBundle\\EventListener\\CorsListener',
            'nelmio_cors.options_resolver.class' => 'Nelmio\\CorsBundle\\Options\\Resolver',
            'nelmio_cors.options_provider.config.class' => 'Nelmio\\CorsBundle\\Options\\ConfigProvider',
            'nelmio_security.clickjacking.paths' => [
                '^/.*' => [
                    'header' => 'SAMEORIGIN',
                ],
            ],
            'nelmio_security.clickjacking.content_types' => [

            ],
            'nelmio_security.nonce_generator.number_of_bytes' => 16,
            'nelmio_security.csp.hash_algorithm' => 'sha256',
            'nelmio_security.csp.report_log_level' => 'notice',
            'nelmio_security.content_type.nosniff' => true,
            'nelmio_security.referrer_policy.policies' => [
                0 => 'no-referrer-when-downgrade',
                1 => 'strict-origin-when-cross-origin',
            ],
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'contao.prepend_locale' => false,
            'contao.encryption_key' => '8a98de06ce2a5eb9e61bec05a99551074dea765a0f0d57defebd6711cfc04cf0',
            'contao.url_suffix' => '.html',
            'contao.upload_path' => 'files',
            'contao.csrf_token_name' => 'contao_csrf_token',
            'contao.pretty_error_screens' => false,
            'contao.error_level' => 8183,
            'contao.image.bypass_cache' => true,
            'contao.image.valid_extensions' => [
                0 => 'jpg',
                1 => 'jpeg',
                2 => 'gif',
                3 => 'png',
                4 => 'tif',
                5 => 'tiff',
                6 => 'bmp',
                7 => 'svg',
                8 => 'svgz',
            ],
            'contao.image.imagine_options' => [
                'jpeg_quality' => 80,
                'interlace' => 'plane',
            ],
            'contao.security.disable_ip_check' => false,
            'netzmacht.contao_toolkit.alias_generator.default' => 'netzmacht.contao_toolkit.data.alias_generator.factory.default_factory',
            'data_collector.templates' => [
                'data_collector.request' => [
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ],
                'data_collector.time' => [
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ],
                'data_collector.memory' => [
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ],
                'data_collector.ajax' => [
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ],
                'data_collector.exception' => [
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ],
                'data_collector.logger' => [
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ],
                'data_collector.events' => [
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ],
                'data_collector.router' => [
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ],
                'data_collector.cache' => [
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ],
                'data_collector.translation' => [
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ],
                'data_collector.security' => [
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ],
                'data_collector.twig' => [
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ],
                'data_collector.doctrine' => [
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ],
                'swiftmailer.data_collector' => [
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ],
                'data_collector.dump' => [
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ],
                'contao.data_collector' => [
                    0 => 'contao',
                    1 => '@ContaoCore/Collector/contao.html.twig',
                ],
                'data_collector.config' => [
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ],
            ],
            'kernel.packages' => [
                'beberlei/assert' => 'v3.2.3',
                'clue/stream-filter' => 'v1.4.1',
                'composer/ca-bundle' => '1.2.4',
                'contao-bootstrap/core' => '2.0.3',
                'contao-bootstrap/grid' => '2.1.1',
                'contao-community-alliance/composer-plugin' => '3.0.9',
                'contao-community-alliance/meta-palettes' => '2.0.7',
                'contao-components/ace' => '1.4.4',
                'contao-components/chosen' => '1.2.2',
                'contao-components/colorbox' => '1.6.5',
                'contao-components/colorpicker' => '1.5.1',
                'contao-components/compass' => '0.12.2.1',
                'contao-components/contao' => '7.1.5',
                'contao-components/datepicker' => '2.3.1',
                'contao-components/dropzone' => '4.3.0',
                'contao-components/highlight' => '8.9.1',
                'contao-components/html5shiv' => '3.7.3',
                'contao-components/installer' => '1.3.1',
                'contao-components/jquery' => '1.12.4',
                'contao-components/jquery-ui' => '1.12.1.1',
                'contao-components/mediabox' => '1.5.5',
                'contao-components/mediaelement' => '4.2.10',
                'contao-components/mootools' => '1.6.0.6',
                'contao-components/respimage' => '1.4.2',
                'contao-components/simplemodal' => '2.1.1',
                'contao-components/swipe' => '2.2.0',
                'contao-components/tablesort' => '3.4.12',
                'contao-components/tablesorter' => '2.1.1',
                'contao-components/tinymce4' => '4.6.7.3',
                'contao-dd/advanced-classes-bundle' => '1.0.1',
                'contao-themes-net/mate-theme-bundle' => '2.2.7',
                'contao-themes-net/material-icons-inserttag' => '1.0.2',
                'contao/calendar-bundle' => '4.4.44',
                'contao/comments-bundle' => '4.4.44',
                'contao/conflicts' => 'dev-master',
                'contao/core-bundle' => '4.4.44',
                'contao/faq-bundle' => '4.4.44',
                'contao/image' => '0.3.9',
                'contao/imagine-svg' => '0.2.2',
                'contao/installation-bundle' => '4.4.44',
                'contao/listing-bundle' => '4.4.44',
                'contao/manager-bundle' => '4.4.44',
                'contao/manager-plugin' => '2.7.1',
                'contao/news-bundle' => '4.4.44',
                'contao/newsletter-bundle' => '4.4.44',
                'doctrine/annotations' => 'v1.8.0',
                'doctrine/cache' => 'v1.8.0',
                'doctrine/collections' => 'v1.6.2',
                'doctrine/common' => 'v2.11.0',
                'doctrine/dbal' => 'v2.8.1',
                'doctrine/doctrine-bundle' => '1.11.2',
                'doctrine/doctrine-cache-bundle' => '1.3.5',
                'doctrine/event-manager' => 'v1.0.0',
                'doctrine/inflector' => 'v1.3.0',
                'doctrine/lexer' => '1.1.0',
                'doctrine/persistence' => '1.1.1',
                'doctrine/reflection' => 'v1.0.0',
                'fig/link-util' => '1.0.0',
                'friendsofsymfony/http-cache' => '2.7.0',
                'friendsofsymfony/http-cache-bundle' => '2.7.2',
                'guzzlehttp/guzzle' => '6.3.3',
                'guzzlehttp/promises' => 'v1.3.1',
                'guzzlehttp/psr7' => '1.6.1',
                'imagine/imagine' => '1.2.2',
                'jdorn/sql-formatter' => 'v1.2.17',
                'jeremykendall/php-domain-parser' => '3.0.0',
                'knplabs/knp-menu' => '2.6.0',
                'knplabs/knp-menu-bundle' => 'v2.3.0',
                'knplabs/knp-time-bundle' => 'v1.9.1',
                'league/uri' => '4.2.2',
                'lexik/maintenance-bundle' => 'v2.1.5',
                'madeyourday/contao-rocksolid-columns' => 'v2.0.2',
                'madeyourday/contao-rocksolid-custom-elements' => 'v2.2.12',
                'madeyourday/contao-rocksolid-icon-picker' => 'v2.0.2',
                'madeyourday/contao-rocksolid-slider' => 'v2.0.11',
                'matthiasmullie/minify' => '1.3.61',
                'matthiasmullie/path-converter' => '1.1.2',
                'menatwork/contao-multicolumnwizard' => '3.3.16',
                'michelf/php-markdown' => '1.8.0',
                'monolog/monolog' => '1.25.1',
                'nelmio/cors-bundle' => '1.5.6',
                'nelmio/security-bundle' => '2.7.0',
                'netzmacht/contao-toolkit' => '3.3.1',
                'ocramius/package-versions' => '1.5.1',
                'oyejorge/less.php' => 'v1.7.0.14',
                'paragonie/random_compat' => 'v9.99.99',
                'patchwork/utf8' => 'v1.3.1',
                'pdir/contao-theme-helper-bundle' => '1.3.4',
                'php-http/client-common' => '1.9.1',
                'php-http/discovery' => '1.7.0',
                'php-http/guzzle6-adapter' => 'v1.1.1',
                'php-http/httplug' => 'v1.1.0',
                'php-http/message' => '1.8.0',
                'php-http/message-factory' => 'v1.0.2',
                'php-http/promise' => 'v1.0.0',
                'phpspec/php-diff' => 'v1.1.0',
                'phpunit/php-token-stream' => '3.1.1',
                'psr/cache' => '1.0.1',
                'psr/container' => '1.0.0',
                'psr/http-message' => '1.0.1',
                'psr/link' => '1.0.0',
                'psr/log' => '1.1.0',
                'psr/simple-cache' => '1.0.1',
                'ralouphie/getallheaders' => '3.0.3',
                'scssphp/scssphp' => '1.0.5',
                'sensio/distribution-bundle' => 'v5.0.25',
                'sensiolabs/ansi-to-html' => 'v1.1.3',
                'sensiolabs/security-checker' => 'v6.0.2',
                'simplepie/simplepie' => '1.5.3',
                'swiftmailer/swiftmailer' => 'v5.4.12',
                'symfony/http-client' => 'v4.3.5',
                'symfony/http-client-contracts' => 'v1.1.7',
                'symfony/mime' => 'v4.3.5',
                'symfony/monolog-bundle' => 'v3.4.0',
                'symfony/polyfill-apcu' => 'v1.12.0',
                'symfony/polyfill-ctype' => 'v1.12.0',
                'symfony/polyfill-intl-icu' => 'v1.12.0',
                'symfony/polyfill-intl-idn' => 'v1.12.0',
                'symfony/polyfill-mbstring' => 'v1.12.0',
                'symfony/polyfill-php56' => 'v1.12.0',
                'symfony/polyfill-php70' => 'v1.12.0',
                'symfony/polyfill-php72' => 'v1.12.0',
                'symfony/polyfill-php73' => 'v1.12.0',
                'symfony/polyfill-util' => 'v1.12.0',
                'symfony/swiftmailer-bundle' => 'v2.6.7',
                'symfony/symfony' => 'v3.4.32',
                'tecnickcom/tcpdf' => '6.3.2',
                'terminal42/contao-folderpage' => '2.0.5',
                'terminal42/header-replay-bundle' => '1.5.3',
                'toflar/psr6-symfony-http-cache-store' => '2.1.0',
                'true/punycode' => 'v2.1.1',
                'twig/twig' => 'v1.42.3',
                'ua-parser/uap-php' => 'v3.9.1',
                'webmozart/assert' => '1.5.0',
                'webmozart/path-util' => '2.3.0',
            ],
            'contao_bootstrap.config' => [
                'layout' => [
                    'metapalette' => [
                        '+title' => [
                            0 => 'layoutType',
                        ],
                    ],
                ],
                'grid' => [
                    'columns' => 12,
                ],
            ],
            'console.command.ids' => [
                'console.command.symfony_bundle_frameworkbundle_command_aboutcommand' => 'console.command.about',
                'console.command.symfony_bundle_frameworkbundle_command_assetsinstallcommand' => 'console.command.assets_install',
                'console.command.symfony_bundle_frameworkbundle_command_cacheclearcommand' => 'console.command.cache_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolclearcommand' => 'console.command.cache_pool_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolprunecommand' => 'console.command.cache_pool_prune',
                'console.command.symfony_bundle_frameworkbundle_command_cachewarmupcommand' => 'console.command.cache_warmup',
                'console.command.symfony_bundle_frameworkbundle_command_configdebugcommand' => 'console.command.config_debug',
                'console.command.symfony_bundle_frameworkbundle_command_configdumpreferencecommand' => 'console.command.config_dump_reference',
                'console.command.symfony_bundle_frameworkbundle_command_containerdebugcommand' => 'console.command.container_debug',
                'console.command.symfony_bundle_frameworkbundle_command_debugautowiringcommand' => 'console.command.debug_autowiring',
                'console.command.symfony_bundle_frameworkbundle_command_eventdispatcherdebugcommand' => 'console.command.event_dispatcher_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routerdebugcommand' => 'console.command.router_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routermatchcommand' => 'console.command.router_match',
                'console.command.symfony_bundle_frameworkbundle_command_translationdebugcommand' => 'console.command.translation_debug',
                'console.command.symfony_bundle_frameworkbundle_command_translationupdatecommand' => 'console.command.translation_update',
                'console.command.symfony_bundle_frameworkbundle_command_xlifflintcommand' => 'console.command.xliff_lint',
                'console.command.symfony_bundle_frameworkbundle_command_yamllintcommand' => 'console.command.yaml_lint',
                'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'security.command.user_password_encoder',
                'console.command.symfony_bridge_twig_command_debugcommand' => 'twig.command.debug',
                'console.command.symfony_bundle_twigbundle_command_lintcommand' => 'twig.command.lint',
                'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand',
                'console.command.doctrine_bundle_doctrinebundle_command_createdatabasedoctrinecommand' => 'doctrine.database_create_command',
                'console.command.doctrine_bundle_doctrinebundle_command_dropdatabasedoctrinecommand' => 'doctrine.database_drop_command',
                'console.command.doctrine_bundle_doctrinebundle_command_generateentitiesdoctrinecommand' => 'doctrine.generate_entities_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_runsqldoctrinecommand' => 'doctrine.query_sql_command',
                'console.command.lexik_bundle_maintenancebundle_command_driverlockcommand' => 'console.command.lexik_bundle_maintenancebundle_command_driverlockcommand',
                'console.command.lexik_bundle_maintenancebundle_command_driverunlockcommand' => 'console.command.lexik_bundle_maintenancebundle_command_driverunlockcommand',
                'console.command.contao_managerbundle_command_installwebdircommand' => 'console.command.contao_managerbundle_command_installwebdircommand',
                'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
                'console.command.contao_corebundle_command_automatorcommand' => 'console.command.contao_corebundle_command_automatorcommand',
                'console.command.contao_corebundle_command_filesynccommand' => 'console.command.contao_corebundle_command_filesynccommand',
                'console.command.contao_corebundle_command_installcommand' => 'console.command.contao_corebundle_command_installcommand',
                'console.command.contao_corebundle_command_symlinkscommand' => 'console.command.contao_corebundle_command_symlinkscommand',
                'console.command.contao_corebundle_command_userpasswordcommand' => 'console.command.contao_corebundle_command_userpasswordcommand',
                'console.command.contao_corebundle_command_versioncommand' => 'console.command.contao_corebundle_command_versioncommand',
                'console.command.contao_installationbundle_command_lockcommand' => 'console.command.contao_installationbundle_command_lockcommand',
                'console.command.contao_installationbundle_command_unlockcommand' => 'console.command.contao_installationbundle_command_unlockcommand',
            ],
            'console.lazy_command.ids' => [
                'console.command.about' => true,
                'console.command.assets_install' => true,
                'console.command.cache_clear' => true,
                'console.command.cache_pool_clear' => true,
                'console.command.cache_pool_prune' => true,
                'console.command.cache_warmup' => true,
                'console.command.config_debug' => true,
                'console.command.config_dump_reference' => true,
                'console.command.container_debug' => true,
                'console.command.debug_autowiring' => true,
                'console.command.event_dispatcher_debug' => true,
                'console.command.router_debug' => true,
                'console.command.router_match' => true,
                'console.command.translation_debug' => true,
                'console.command.translation_update' => true,
                'console.command.xliff_lint' => true,
                'console.command.yaml_lint' => true,
                'security.command.user_password_encoder' => true,
                'twig.command.debug' => true,
                'twig.command.lint' => true,
                'doctrine.database_create_command' => true,
                'doctrine.database_drop_command' => true,
                'doctrine.generate_entities_command' => true,
                'doctrine.query_sql_command' => true,
                'sensio_distribution.security_checker.command' => true,
            ],
        ];
    }
}
