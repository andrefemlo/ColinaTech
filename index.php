<!-- npx tailwindcss -i ./tailwind.css -o ./style.css --watch -->
<?php get_header(); ?>

<main class="text-lg overflow-hidden w-[100dvw]">

<section class="bg-colina-900 min-h-screen flex flex-col md:flex-row items-center justify-center bg-bg-hero bg-no-repeat bg-cover">
  <div class="flex flex-col lg:flex-row mx-4 max-w-7xl items-center justify-center text-neutral-50">
    <div class="flex flex-col max-w-1/2 items-center min-h-[60%] lg:items-start justify-center lg:space-y-16 space-y-4">
      <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold lg:leading-[120%] text-center lg:text-start" data-aos="fade-up">
      <span class="text-colina-400">Escale suas vendas</span><br> a partir do marketing digital
      </h1>
      <p class="text-center lg:text-start" data-aos="fade-up">Acredita que sua empresa pode ter melhores resultados no Marketing Digital?<br>Entre em contato e tenha uma sessão estratégica <span class="text-colina-400 font-semibold">grátis</span> com um dos diretores da Colina Tech.</p>
      <a href="#" class="py-3 px-16 bg-gradient-to-b from-colina-400 to-colina-500 rounded-xl font-semibold" data-aos="fade-up">Agendar Agora</a>
    </div>
    <img class="w-full sm:w-3/4 h-fit mt-8 lg:my-auto" src="<?php echo get_template_directory_uri(); ?>/src/images/image-hero.png" alt="hero image" class="w-full h-full">
  </div>
</section>

<section class="h-[100dvh] flex flex-col bg-colina-900 items-center justify-center text-neutral-50 ">
  <div class="h-[100dvh] flex flex-col items-center justify-evenly py-8 text-neutral-50 w-screen lg:max-w-7xl">
    <h2 class="text-4xl text-colina-400 font-semibold sm:text-start text-center">Como garantimos resultados?</h2>
    <p class="text-center"><span class="font-semibold">Com nosso onboarding e ongoing!</span><br>
    Nossa escalada começa com a elaboração de processos importantes, são eles:</p>
    <div class="flex flex-col w-[80%]" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
      <?php echo get_template_part('template-parts/services'); ?>
    </div>
    <p class="text-center text-base">A partir disso, quando já tivermos todos os materiais necessários para nossa escalada, é hora de começar a caminhada!<br>
    Aqui cada trilha é única. Descubra a sua agora!
    </p>
    <a href="#" class="py-3 px-16 bg-gradient-to-b from-colina-400 to-colina-500 rounded-xl font-semibold text-lg">Quero descobrir</a>
  </div>
</section>


<section class="mt-4 flex flex-col lg:flex-row justify-center">
  <div class="min-h-[90dvh] 2xl:w-screen flex flex-col lg:flex-row items-center justify-center">

    <div class="flex flex-col w-full p-[4dvw] items-start justify-center my-12 lg:mx-0" data-aos="fade-right" data-aos-delay="300">
      <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold leading-[120%]">
        <span class="text-colina-400">Somos uma agência data driven marketing!</span> E o que isso significa?
      </h1>
      <p class="text-base my-6">Significa que o nosso objetivo de fato é gerar resultados mensuráveis e que possam comprovar o ROI (Return of Investment) das nossas ações. O que não é medido, não pode ser gerenciado.<br><br> 
      Por isso, trabalhamos com escopos de serviços que conseguimos realmente acompanhar e monitorar toda a jornada do usuário/ lead para garantir que ele realize as conversões necessárias.<br><br> 
      Temos reuniões semanais com clientes para acompanhar seus <strong>resultados de verdade: as vendas!</strong></p>
      <a href="#" class="py-3 px-16 bg-gradient-to-b from-colina-400 to-colina-500 rounded-xl font-semibold text-lg text-neutral-50 shadow-lg">Agende agora sua sessão estratégica grátis</a>
    </div>
    <div class="min-h-full w-full flex items-end justify-end">
      <img class="w-full h-fit" data-aos="fade-left" data-aos-delay="600" src="<?php echo get_template_directory_uri(); ?>/src/images/lucas-ceo.png" alt="Foto de Lucas Trindade, o Ceo da Colina Tech.">
    </div>
    
  </div>
</section>

<section class="min-h-[100dvh] py-8 flex flex-col bg-colina-400 items-center justify-around">
  <div class="flex-flex-col max-w-7xl items-center justify-around">

    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-center my-12">Qual dessas soluções é a que você precisa?</h2>
    <div class="p-6 grid justify-items-stretch grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-y-12 my-16">
      <div class="max-md:p-[4dvw] justify-between" data-aos="fade-right" data-aos-delay="300">
        <span class="icon">
          <img src="<?php echo get_template_directory_uri(); ?>/src/icons/Performance.svg" alt="">
        </span>
        <div class="flex flex-col h-4/6 mt-4 justify-between">
          <h3 class="card-title font-semibold text-xl lg:text-3xl">
            Performance
          </h3>
          <p class="text-base">
            O seu produto e/ou serviço pode ser o melhor do mundo, mas <strong>se você não é visto, não é lembrado</strong>, concorda? Apareça para o seu potencial cliente de forma ativa e aumente suas vendas de forma recorrente.
          </p>
        </div>
      </div>
      <div class="max-md:p-[4dvw] justify-between" data-aos="fade-right" data-aos-delay="600">
        <span class="icon">
          <img src="<?php echo get_template_directory_uri(); ?>/src/icons/SEO.svg" alt="">
        </span>
        <div class="flex flex-col h-4/6 items-start justify-between mt-4">
          <h3 class="card-title font-semibold text-3xl">
            SEO
          </h3>
          <p class="text-base">Com nossos especialistas, construiremos estratégias de SEO para que seu site alcance bons rankings nas buscas do Google. A partir disso, conseguimos <strong>aumentar o reconhecimento de marca e captar clientes passivos.</strong>
        </p>
      </div>
    </div>
    <div class="max-md:p-[4dvw] justify-between" data-aos="fade-right" data-aos-delay="900">
      <span class="icon">
        <img src="<?php echo get_template_directory_uri(); ?>/src/icons/Marketing.svg" alt="">
      </span>
      <div class="flex flex-col h-4/6 items-start justify-between mt-4">
        <h3 class="card-title font-semibold text-3xl mb-6">
          Automação de Marketing
        </h3>
        <p class="text-base">Manter o relacionamento com a base de clientes é fundamental para fidelização e previsibilidade do seu funil de vendas, utilizando ferramentas que ajudem na evolução da jornada de compra.
          </p>
        </div>
      </div>
      <div class="max-md:p-[4dvw] justify-between" data-aos="fade-right" data-aos-delay="1200">
        <span class="icon">
          <img src="<?php echo get_template_directory_uri(); ?>/src/icons/Site.svg" alt="">
        </span>
        <div class="flex flex-col h-4/6 items-start justify-between mt-4">
          <h3 class="card-title font-semibold text-3xl">
            Site de Conversão
          </h3>
          <p class="text-base">Nossa equipe com autoridade em design cria sites de conversão personalizados que são otimizados para o público-alvo. Isso garante que seja atraente, fácil de usar e altamente eficaz em termos de conversão.
            </p>
          </div>
        </div>
      </div>
    </div>
    <a href="#" class="z-10 py-3 px-16 mt-12 my-48 hover:bg-colina-500 hover:drop-shadow-2xl transition-colors hover:text-neutral-100 bg-neutral-100 rounded-xl text-colina-400 font-semibold text-lg shadow-lg">Fale com um especialista</a>
</section>

<section class="relative z-0">
  <img class="absolute bottom-0 left-0 mix-blend-darken opacity-50" src="<?php echo get_template_directory_uri(); ?>/src/images/Vector@2x.png" alt="">
  <img class="absolute bottom-0 left-0" src="<?php echo get_template_directory_uri(); ?>/src/images/caminhada.png" alt="">
</section>

<section class="flex flex-col min-h-[80dvh] bg-colina-900 items-center justify-around py-12">
  <h2 class="font-semibold text-4xl text-colina-400 py-8">
    Nossos diferenciais
  </h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-16 my-16">
    <div class="flex flex-col items-center justify-center" data-aos="fade-in" data-aos-delay="150" data-aos-duration="600">
      <img src="<?php echo get_template_directory_uri(); ?>/src/images/google_icon.png" alt="" class="w-auto h-[72px] mb-6">
      <h4 class="font-semibold text-neutral-50 text-3xl text-center">Google<br>Partner</h4>
    </div>
    <div class="flex flex-col items-center justify-center" data-aos="fade-in" data-aos-delay="300" data-aos-duration="600">
      <img src="<?php echo get_template_directory_uri(); ?>/src/images/active_campaing_icon.png" alt="" class="w-auto h-[72px] mb-6">
      <h4 class="font-semibold text-neutral-50 text-3xl text-center">ActiveCampaing<br>Partner</h4>
    </div>
    <div class="flex flex-col items-center justify-center" data-aos="fade-in" data-aos-delay="450" data-aos-duration="600">
      <img src="<?php echo get_template_directory_uri(); ?>/src/images/group_icon.png" alt="" class="w-auto h-[72px] mb-6">
      <h4 class="font-semibold text-neutral-50 text-3xl text-center">Equipe<br>Multidisciplinar</h4>
    </div>
    <div class="flex flex-col items-center justify-center" data-aos="fade-in" data-aos-delay="600" data-aos-duration="600">
      <img src="<?php echo get_template_directory_uri(); ?>/src/images/many_chat_icon.png" alt="" class="w-auto h-[72px] mb-6">
      <h4 class="font-semibold text-neutral-50 text-3xl text-center">ManyChat<br>Partner</h4>
    </div>
  </div>
  <a href="#" data-aos="fade-right" data-aos-delay="900" class="z-10 py-3 px-16 my-16 text-neutral-100 rounded-xl bg-colina-400 hover:bg-neutral-100 hover:drop-shadow-2xl transition-colors hover:text-colina-400 font-semibold text-lg shadow-lg">Fale com um especialista</a>
</section>

<section class="flex flex-col sm:h-[80dvh] min-h-[60dvh] bg-colina-900 items-center justify-around">
  <h2 class="font-semibold sm:text-start text-center text-4xl text-colina-400">
    Conheça as empresas que chegaram ao topo da Colina
  </h2>
  <div class="flex my-8 flex-col sm:w-[80%] w-full bg-slate-100 sm:rounded-full p-8">
    <?php echo get_template_part('template-parts/partners'); ?>    
  </div>
</section>

<section class="flex min-h-[80dvh] max-w-[100dvww] bg-colina-700 border-t-neutral-600 border-t items-center justify-center">
  <div class="flex flex-col lg:flex-row items-center max-w-[80%] max-lg:py-24">
    <div class="flex flex-col justify-start space-y-16 w-full lg:w-1/2 lg:pr-12">
      <h2 class="font-semibold text-3xl lg:text-4xl text-neutral-50">
        O que nossos clientes falam sobre nós?
      </h2>
      <a href="#" class="text-center z-10 py-3 px-9 text-neutral-100 rounded-xl bg-gradient-to-b from-colina-400 to-colina-500 font-semibold shadow-lg hover:from-slate-200 hover:to-neutral-200 transition-colors hover:text-colina-500">Fale com um especialista</a>
    </div>  
    <div class="flex p-16">
        <?php echo get_template_part('template-parts/testimonies'); ?>
    </div>
  </div>
</section>



<section class="flex flex-col lg:flex-row items-center justify-center bg-[#e7e7e9] lg:bg-colina-900 min-h-[90dvh] lg:bg-wrect bg-no-repeat bg-right-top-4 bg-cover">
  <div class="flex flex-col lg:w-6/12 min-h-[90dvh] items-start justify-center py-[10dvw] max-lg:px-[10dvw] md:pl-[10dvw] mt-12">
    <h2 class="font-bold text-4xl text-colina-400 mb-4">
      Será que as <span class="text-colina-900">soluções da Colina Tech</span> são indicadas para sua empresa? 
    </h2>
    <p class="mb-4 text-lg">
      O Inbound Marketing é para qualquer negócio, desde que esteja aberto às oportunidades do digital. Por isso, seu negócio tem muitas chances de obter resultados incríveis conosco caso se enquadre em uma ou mais das categorias abaixo:
    </p>
    <ul class="flex flex-col space-y-2">
      <li class="flex items-center" data-aos="fade-right" data-aos-delay="150" data-aos-duration="600" data-aos-offset="-200">
         <img class="w-auto h-8" src="<?php echo get_template_directory_uri(); ?>/src/images/lojas_virtuais.png" alt="">
        <h4 class=" font-semibold text-2xl ml-4">
        Lojas Virtuais
        </h4>
      </li>
      <li class="flex items-center" data-aos="fade-right" data-aos-delay="300" data-aos-duration="600" data-aos-offset="-200">
         <img class="w-auto h-8" src="<?php echo get_template_directory_uri(); ?>/src/images/saas.png" alt="">
        <h4 class=" font-semibold text-2xl ml-4">
          SaaS
        </h4>
      </li>
      <li class="flex items-center" data-aos="fade-right" data-aos-delay="450" data-aos-duration="600" data-aos-offset="-200">
         <img class="w-auto h-8" src="<?php echo get_template_directory_uri(); ?>/src/images/b2b.png" alt="">
        <h4 class=" font-semibold text-2xl ml-4">
          B2B
        </h4>
      </li>
      <li class="flex items-center" data-aos="fade-right" data-aos-delay="600" data-aos-duration="600" data-aos-offset="-200">
         <img class="w-auto h-8" src="<?php echo get_template_directory_uri(); ?>/src/images/b2c.png" alt="">
        <h4 class=" font-semibold text-2xl ml-4">
          B2C
        </h4>
      </li>
      <li class="flex items-center" data-aos="fade-right" data-aos-delay="750" data-aos-duration="600" data-aos-offset="-200">
        <img class="w-auto h-8" src="<?php echo get_template_directory_uri(); ?>/src/images/empresas.png" alt="">
        <h4 class=" font-semibold text-2xl ml-4">
          Empresas Locais e Nacionais
        </h4>
      </li>
    </ul>
    <a href="#" data-aos="fade-in" data-aos-delay="1200" data-aos-duration="900" data-aos-offset="-300" class="py-3 px-16 mt-12 text-neutral-100 rounded-xl hover:from-slate-200 hover:from-neutral-50 hover:drop-shadow-2xl transition-colors hover:text-colina-500 bg-gradient-to-b from-colina-400 to-colina-500 font-semibold text-lg shadow-xl">
      Agendar reunião
    </a>
  </div>
  <div class="flex sm:w-10/12 sm:items-end justify-end -mr-48">
    <img class="h-fit w-max" src="<?php echo get_template_directory_uri(); ?>/src/images/computer.png" alt="">
  </div>
</section>

<section class="flex bg-[#e7e7e9] min-h-[90dvh] justify-center">
  <div class="flex w-[100dvw] lg:w-[80dvw] max-lg:flex-col-reverse">
    <div class="flex items-end justify-center lg:w-1/2 pt-8 h-full">
      <img class="h-auto" src="<?php echo get_template_directory_uri(); ?>/src/images/coo-heitor.png" alt="">
    </div>
    <div class="flex flex-col w-full lg:w-1/2 justify-center space-y-8 mt-16 max-lg:px-[4dvw] pb-8">
      <h2 class="text-center font-bold text-colina-400 text-4xl max-lg:mt-16">
        Perguntas frequentes
      </h2>
        <?php echo get_template_part('template-parts/accordion'); ?>
    </div>
  </div>
</section>

<section class="flex bg-colina-400 justify-center items-center">
  <div class="flex flex-col lg:flex-row justify-center max-lg:items-center lg:w-[80dvw] w-[100dvw]">
    <div class="flex flex-col lg:w-1/2 max-sm:p-8 items-center relative">
      <img class="h-auto" src="<?php echo get_template_directory_uri(); ?>/src/images/a.png" alt="">
      <div class="absolute top-40 w-[22rem]">

        <h2 class="font-bold text-3xl">
          Comece aqui sua escalada!
        </h2>
        <p class="text-base">
          Preencha o formulário e faça sua empresa chegar ao topo com o Inbound Marketing pautada no Data Driven Marketing.
        </p>
      </div>
    </div>

    <div class="flex flex-col justify-center items-center w-5/6 lg:w-1/2 z-10 py-16">
      <div class="border bg-colina-400 bg-opacity-70 lg:bg-transparent rounded-xl w-4/5 flex flex-col items-center mx-auto justify-center border-neutral-200 p-6">
        
        <form class="">
          <div class="space-y-12">
            
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-full">
                <label for="nome" class="block text-base leading-6">Nome*</label>
                <div class="mt-2">
                  <input type="text" name="nome" id="nome"  class="block w-full rounded-lg border-0 py-1.5 ring-1 ring-inset placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-colina-900 sm:text-sm sm:leading-6">
                </div>
              </div>
              
              
              <div class="sm:col-span-full">
                <label for="tel" class="block text-base leading-6">E-mail*</label>
                <div class="mt-2">
                  <input id="tel" name="tel" type="tel" maxlength="15" required="true" data-js="phone" autocomplete="tel" placeholder="(DDD) xxxxx-xxxx" class="block w-full rounded-lg border-0 py-1.5 ring-1 ring-inset placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-colina-900 sm:text-sm sm:leading-6">
                </div>
              </div>
              
              <div class="sm:col-span-full">
                <label for="email" class="block text-base leading-6">Celular*</label>
                <div class="mt-2">
                  <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-lg border-0 py-1.5 ring-1 ring-inset placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-colina-900 sm:text-sm sm:leading-6">
                </div>
              </div>
              
              <div class="sm:col-span-full">
                <label for="empresa" class="block text-base leading-6">Empresa*</label>
                <div class="mt-2">
                  <input id="empresa" name="empresa" type="empresa" autocomplete="empresa" class="block w-full rounded-lg border-0 py-1.5 ring-1 ring-inset placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-colina-900 sm:text-sm sm:leading-6">
                </div>
              </div>
              
              <div class="sm:col-span-full">
                <label for="setor" class="block text-base leading-6">Área de atuação da empresa*</label>
                <div class="mt-2">
                  <input id="setor" name="setor" type="setor" autocomplete="setor" class="block w-full rounded-lg border-0 py-1.5 ring-1 ring-inset placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-colina-900 sm:text-sm sm:leading-6">
                </div>
              </div>
              
              <div class="sm:col-span-full">
                <label for="cargo" class="block text-base leading-6">Qual o seu cargo?*</label>
                <div class="mt-2">
                  <input id="cargo" name="cargo" type="cargo" autocomplete="cargo" class="block w-full rounded-lg border-0 py-1.5 ring-1 ring-inset placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-colina-900 sm:text-sm sm:leading-6">
                </div>
              </div>
              
              <div class="sm:col-span-full">
                <label for="desafios" class="block text-base leading-6">Nos conte mais sobre os desafios do seu negócio*</label>
                <div class="mt-2">
                  <input id="desafios" name="desafios" type="desafios" autocomplete="desafios" class="block w-full rounded-lg border-0 py-1.5 ring-1 ring-inset placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-colina-900 sm:text-sm sm:leading-6">
                </div>
              </div>

              <div class="sm:col-span-full">
                <label for="investimento" class="block text-base leading-6">Qual investimento mensal desejado para a estratégia de marketing na sua empresa?</label>
                <div class="mt-2">
                  <input id="investimento" name="investimento" type="investimento" autocomplete="investimento" class="block w-full rounded-lg border-0 py-1.5 ring-1 ring-inset placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-colina-900 sm:text-sm sm:leading-6">
                </div>
              </div>
              
              <div class="sm:col-span-full">
                <label for="captcha" class="block text-base leading-6">5 + 5 = ?*</label>
                <div class="mt-2">
                  <input id="captcha" name="captcha" type="captcha" autocomplete="captcha" class="block w-full rounded-lg border-0 py-1.5 ring-1 ring-inset placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-colina-900 sm:text-sm sm:leading-6">
                </div>
              </div>
            
              <div class="flex gap-x-3 sm:col-span-full">
                <div class="flex h-6 items-center">
                  <input id="accept" name="accept" type="checkbox" class="appearance-none h-4 w-4 rounded checked:ring-colina-400">
                </div>
                <div class="text-sm leading-6">
                  <label for="accept" class="">Eu concordo em receber comunicações</label>
                  <p class="text-sm mt-3">A nossa empresa está com prometida a proteger e respeitar sua privacidade, utilizaremos seus dados apenas para fins de comunicação.</p>
                </div>
              </div>
            </div>
          </div>
        </form>
        
        <button class="py-2 px-8 mt-8 bg-neutral-100 rounded-xl text-colina-400 font-semibold text-lg shadow-xl hover:text-neutral-100 hover:bg-colina-400 hover:shadow-2xl transition-colors">Agendar reunião agora</button>
      </div>
    </div>
  </div>
</section>

<section class="relative z-0">
  <img class="absolute bottom-32 left-[12rem]" src="<?php echo get_template_directory_uri(); ?>/src/images/Caminhada 1.png" alt="">
  <img class="absolute bottom-0 left-[12rem]" src="<?php echo get_template_directory_uri(); ?>/src/images/blue-rect.png" alt="">
  <img class="absolute -bottom-[456px] -left-[592px]" src="<?php echo get_template_directory_uri(); ?>/src/images/white-rect.png" alt="">
</section>

</main>
<?php get_footer(); ?>