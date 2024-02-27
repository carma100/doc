<x-page
    title="Recipes"
    :sectionMenu="[
        'Sections' => [
            ['url' => '#form-with-events', 'label' => 'Form and events'],
            ['url' => '#make-component', 'label' => 'View component with AlpineJs'],
            ['url' => '#assets-vite', 'label' => 'Vite build connection'],
            ['url' => '#custom-buttons', 'label' => 'Custom buttons'],
            ['url' => '#hasone-through-template', 'label' => 'HasOne through the Template field'],
            ['url' => '#custom-breadcrumbs', 'label' => 'Changing breadcrumbs from a resource'],
            ['url' => '#index-page-cards', 'label' => 'Index page via CardsBuilder'],
            ['url' => '#sorting-for-cards-builder', 'label' => 'Sorting for CardsBuilder'],
            ['url' => '#update-on-preview-pivot', 'label' => 'updateOnPreview for pivot fields'],
            ['url' => '#hasmany-parent-id', 'label' => 'Parent ID in HasMany'],
        ]
    ]"
>

@include('pages.en.recipes.form-with-events', ['title' => 'Form and events'])
@include('pages.en.recipes.make-component', ['title' => 'View component with AlpineJs'])
@include('pages.en.recipes.assets-vite', ['title' => 'Vite build connection'])
@include('pages.en.recipes.custom-buttons', ['title' => 'Custom buttons'])
@include('pages.en.recipes.hasone-through-template', ['title' => 'HasOne through the Template field'])
@include('pages.en.recipes.custom-breadcrumbs', ['title' => 'Changing breadcrumbs from a resource'])
@include('pages.en.recipes.index-page-cards', ['title' => 'Index page via CardsBuilder'])
@include('pages.en.recipes.sorting-for-cards-builder', ['title' => 'Сортировка для CardsBuilder'])
@include('pages.en.recipes.update-on-preview-pivot', ['title' => 'updateOnPreview for pivot fields'])
@include('pages.en.recipes.hasmany-parent-id', ['title' => 'Parent ID in HasMany'])

</x-page>
