<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'joomla\\command\\command' => '/Command/Command.php',
                'joomla\\command\\commandprocessor' => '/Command/CommandProcessor.php',
                'joomla\\command\\controller' => '/Command/Controller.php',
                'joomla\\command\\dispatcher' => '/Command/Dispatcher.php',
                'joomla\\command\\macrocommand' => '/Command/MacroCommand.php',
                'joomla\\command\\recoverablecommand' => '/Command/RecoverableCommand.php',
                'joomla\\content\\content' => '/Content/Content.php',
                'joomla\\content\\contentgroup' => '/Content/ContentGroup.php',
                'joomla\\content\\contentitem' => '/Content/ContentItem.php',
                'joomla\\frontend\\cli\\input' => '/Frontend/Cli/Input.php',
                'joomla\\frontend\\cli\\output' => '/Frontend/Cli/Output.php',
                'joomla\\frontend\\http\\acceptheader' => '/Frontend/Http/Header/AcceptHeader.php',
                'joomla\\frontend\\http\\acceptlanguageheader' => '/Frontend/Http/Header/AcceptLanguageHeader.php',
                'joomla\\frontend\\http\\client\\scriptstrategy' => '/Frontend/Http/Client/ScriptStrategy.php',
                'joomla\\frontend\\http\\qualifiedheader' => '/Frontend/Http/Header/QualifiedHeader.php',
                'joomla\\frontend\\http\\request' => '/Frontend/Http/Request.php',
                'joomla\\frontend\\http\\response' => '/Frontend/Http/Response.php',
                'joomla\\frontend\\input\\argvinput' => '/Frontend/Input/ArgvInput.php',
                'joomla\\frontend\\input\\arrayinput' => '/Frontend/Input/ArrayInput.php',
                'joomla\\frontend\\input\\input' => '/Frontend/Input/Input.php',
                'joomla\\frontend\\input\\inputargument' => '/Frontend/Input/InputArgument.php',
                'joomla\\frontend\\input\\inputdefinition' => '/Frontend/Input/InputDefinition.php',
                'joomla\\frontend\\input\\inputinterface' => '/Frontend/Input/InputInterface.php',
                'joomla\\frontend\\input\\inputoption' => '/Frontend/Input/InputOption.php',
                'joomla\\frontend\\output' => '/Frontend/Output.php',
                'joomla\\frontend\\payload' => '/Frontend/Payload.php',
                'joomla\\frontend\\renderer' => '/Frontend/Renderer.php',
                'joomla\\frontend\\renderer\\ansirenderer' => '/Frontend/Renderer/AnsiRenderer.php',
                'joomla\\frontend\\renderer\\docbookrenderer' => '/Frontend/Renderer/DocbookRenderer.php',
                'joomla\\frontend\\renderer\\dynamicrendererimplementation' => '/Frontend/Renderer/DynamicRendererImplementation.php',
                'joomla\\frontend\\renderer\\factory' => '/Frontend/Renderer/Factory.php',
                'joomla\\frontend\\renderer\\htmlrenderer' => '/Frontend/Renderer/HtmlRenderer.php',
                'joomla\\frontend\\renderer\\jsonrenderer' => '/Frontend/Renderer/JsonRenderer.php',
                'joomla\\frontend\\renderer\\notfoundexception' => '/Frontend/Renderer/NotFoundException.php',
                'joomla\\frontend\\renderer\\pdfrenderer' => '/Frontend/Renderer/PdfRenderer.php',
                'joomla\\frontend\\renderer\\plainrenderer' => '/Frontend/Renderer/PlainRenderer.php',
                'joomla\\frontend\\renderer\\xmlrenderer' => '/Frontend/Renderer/XmlRenderer.php',
                'joomla\\frontend\\rest\\request' => '/Frontend/Rest/Request.php',
                'joomla\\frontend\\rest\\response' => '/Frontend/Rest/Response.php',
                'joomla\\frontend\\router' => '/Frontend/Router.php',
                'joomla\\frontend\\router\\notfoundexception' => '/Frontend/Router/NotFoundException.php',
                'joomla\\frontend\\router\\route' => '/Frontend/Router/Route.php',
                'joomla\\orm\\collection\\abstractcollection' => '/ORM/Collection/AbstractCollection.php',
                'joomla\\orm\\collection\\collectioninterface' => '/ORM/Collection/CollectionInterface.php',
                'joomla\\orm\\definition\\locator\\locator' => '/ORM/Definition/Locator/Locator.php',
                'joomla\\orm\\definition\\locator\\locatorinterface' => '/ORM/Definition/Locator/LocatorInterface.php',
                'joomla\\orm\\definition\\locator\\strategy\\mapstrategy' => '/ORM/Definition/Locator/Strategy/MapStrategy.php',
                'joomla\\orm\\definition\\locator\\strategy\\recursivedirectorystrategy' => '/ORM/Definition/Locator/Strategy/RecursiveDirectoryStrategy.php',
                'joomla\\orm\\definition\\locator\\strategy\\strategyinterface' => '/ORM/Definition/Locator/Strategy/StrategyInterface.php',
                'joomla\\orm\\definition\\parser\\belongsto' => '/ORM/Definition/Parser/BelongsTo.php',
                'joomla\\orm\\definition\\parser\\element' => '/ORM/Definition/Parser/Element.php',
                'joomla\\orm\\definition\\parser\\entity' => '/ORM/Definition/Parser/Entity.php',
                'joomla\\orm\\definition\\parser\\field' => '/ORM/Definition/Parser/Field.php',
                'joomla\\orm\\definition\\parser\\fields' => '/ORM/Definition/Parser/Fields.php',
                'joomla\\orm\\definition\\parser\\fieldset' => '/ORM/Definition/Parser/Fieldset.php',
                'joomla\\orm\\definition\\parser\\hasmany' => '/ORM/Definition/Parser/HasMany.php',
                'joomla\\orm\\definition\\parser\\hasmanythrough' => '/ORM/Definition/Parser/HasManyThrough.php',
                'joomla\\orm\\definition\\parser\\hasone' => '/ORM/Definition/Parser/HasOne.php',
                'joomla\\orm\\definition\\parser\\option' => '/ORM/Definition/Parser/Option.php',
                'joomla\\orm\\definition\\parser\\parser' => '/ORM/Definition/Parser/Parser.php',
                'joomla\\orm\\definition\\parser\\relation' => '/ORM/Definition/Parser/Relation.php',
                'joomla\\orm\\entity\\entity' => '/ORM/Entity/Entity.php',
                'joomla\\orm\\entity\\entitybuilder' => '/ORM/Entity/EntityBuilder.php',
                'joomla\\orm\\entity\\entityinterface' => '/ORM/Entity/EntityInterface.php',
                'joomla\\orm\\entity\\entityreflector' => '/ORM/Entity/EntityReflector.php',
                'joomla\\orm\\exception\\entitynotfoundexception' => '/ORM/Exception/EntityNotFoundException.php',
                'joomla\\orm\\exception\\filenotfoundexception' => '/ORM/Exception/FileNotFoundException.php',
                'joomla\\orm\\exception\\invalidelementexception' => '/ORM/Exception/InvalidElementException.php',
                'joomla\\orm\\exception\\propertynotfoundexception' => '/ORM/Exception/PropertyNotFoundException.php',
                'joomla\\orm\\exception\\writeonimmutableexception' => '/ORM/Exception/WriteOnImmutableException.php',
                'joomla\\orm\\finder\\collectionfinderinterface' => '/ORM/Finder/CollectionFinderInterface.php',
                'joomla\\orm\\finder\\entityfinderinterface' => '/ORM/Finder/EntityFinderInterface.php',
                'joomla\\orm\\finder\\operator' => '/ORM/Finder/Operator.php',
                'joomla\\orm\\persistor\\persistorinterface' => '/ORM/Persistor/PersistorInterface.php',
                'joomla\\orm\\repository\\repository' => '/ORM/Repository/Repository.php',
                'joomla\\orm\\repository\\repositoryinterface' => '/ORM/Repository/RepositoryInterface.php',
                'joomla\\orm\\repository\\storageproviderinterface' => '/ORM/Storage/StorageProviderInterface.php',
                'joomla\\orm\\status' => '/ORM/Status.php',
                'joomla\\orm\\validator\\validatorinterface' => '/ORM/Validator/ValidatorInterface.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    }
);
// @codeCoverageIgnoreEnd