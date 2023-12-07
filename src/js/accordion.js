jQuery(document).ready(function ($) {
    // Ocultar todos os conteúdos do acordeão por padrão
    $('.accordion-content').hide();

    // Adicionar evento de clique ao título do acordeão
    $('.accordion-title').click(function () {
        // Encontrar o contêiner do acordeão atual
        var accordionItem = $(this).closest('.accordion-item');

        // Ocultar todos os outros conteúdos e mostrar apenas o do acordeão clicado
        $('.accordion-content').not(accordionItem.find('.accordion-content')).slideUp('fast');
        accordionItem.find('.accordion-content').slideToggle('fast');
    });
});
