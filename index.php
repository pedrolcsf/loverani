<?php
  $conn = pg_connect("host=pgsql.loverani.com.br dbname=loverani user=loverani password=cvjunior1207");
  $result = pg_query($conn, "select * from products");
  
  $select = pg_query("SELECT * FROM info WHERE id=1");
  $rowInfo = pg_fetch_row($select);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
  <title>Loverani</title>
</head>
<body>
  <!-- header -->
  <div style="display: flex; align-items: center;" class="justify-center p-4">
    <div style="display: flex; gap: 5px" class="">
      <button onclick="window.location.href = 'https://loverani.com.br/dashboard/login.html'" class="bg-orange-500 rounded-md text-white p-2 pl-4 pr-4 font-semibold">Login</button>
    </div>

    <div style="display: flex; width: 1200px; justify-content: center; align-items: center; padding: '10px 0';">
      <img onclick="window.location.href = 'https://loverani.com.br'" class="w-32 md:w-32 lg:w-36"  src="loverani.png" />
    </div>
    <div style="align-items: center;" class="flex align-center">
      <button onclick="window.location.href = 'https://www.instagram.com/loveranibones/'">
        <img src="instagram.png" style="width: 22px; margin-right: 30px;" alt="">
      </button>
      <button onclick="window.location.href = 'https://api.whatsapp.com/send/?phone=5543996947670&text&type=phone_number&app_absent=0'">
        <img src="whatsapp.png" style="width: 38px; margin-right: 30px;" alt="">
      </button>
    </div>
  </div>
  <!-- fim do header -->

  <div class="mt-24 mb-24" style="display: flex; justify-content: center;">
    <div class="p-6 sm: p-6 md:p-6 lg:p-0 w-[1200px]" style="display: flex; justify-content: space-between;">
      <div class="flex-1 mr-12" style="display: flex; flex-direction: column;">
        <span class="mb-4 text-[56px] font-bold"><?php echo $rowInfo[1];?></span>
        <span style="color: #666;" class="mb-4 text-[20] font-normal">
       		<?php echo $rowInfo[2];?>
        </span>
        <div style="display: flex; justify-content: center; margin-top: 4px;">
          <button  onclick="window.location.href = 'https://loverani.com.br/contato'" class="bg-orange-500 text-white rounded-md pl-4 pr-4 pt-2 pb-2 font-bold w-full">Solicitar orçamento</button>
        </div>
      </div>
      <!-- carrosel -->
      <div id="default-carousel" class="ml-12 flex-1 relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
             <!-- Item 1 -->
            <div class="w-[420px] hidden duration-700 ease-in-out" data-carousel-item>
                <img style="object-fit: contain; margin: auto;" src="cap1.png" class="w-[420px] absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div  class=" w-[420px] hidden duration-700 ease-in-out" data-carousel-item>
                <img style="object-fit: contain; margin: auto;" src="cap2.png" class="w-[420px] absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="w-[420px] align-center hidden duration-700 ease-in-out" data-carousel-item>
                <img style="object-fit: contain; margin: auto;" src="cap3.png" class="w-[420px] absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Anterior</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Próximo</span>
            </span>
        </button>
      </div>
      <!-- end carrosel -->
    </div>

    
  </div>

  <div class="mt-24 mb-24 bg-orange-100 p-20 " style="display: flex; justify-content: center; flex-direction: row;">
    <div class="p-6 w-[1300px]" style="display: flex; justify-content: center;">
      <div class="flex-1 mr-12" style="display: flex; flex-direction: column;">
        <span class="mb-4 text-[42px] font-bold"> Nós somos a <span class="text-orange-500">Lorevani.</span></span>
        <span class="mb-4 text-[32px] font-bold"> Crie seu boné, expresse seu estilo!</span>
        <span style="color: #666;" class="mb-4 text-[20px] font-normal">
          Somos uma empresa especializada em bonés personalizados, onde a criatividade
          encontra o acessório perfeito. Nossa missão é proporcionar a você a oportunidade
          de expressar sua personalidade única por meio de bonés exclusivos e sob medida.
          Trabalhamos com materiais de alta qualidade, combinados com técnicas de personalização
          avançadas, para garantir que cada boné seja um verdadeiro reflexo do seu estilo e identidade.
          Deixe sua marca no mundo da moda com nossos bonés personalizados, feitos especialmente para você!
        </span>
      </div>

      <div class="flex-1 mr-12" style="display: flex; flex-direction: column;">
        <span class="mb-4 text-[32px] font-bold"> A Empresa Loverani Confecções Ltda</span>
        <span class="mb-4 text-[28px] font-bold"> Sobre nós: </span>
        <span style="color: #666;" class="mb-4 text-[20px] font-normal">
          Fundada em 2002, a Loverani Confecções Ltda atua no ramo de confecção de brindes promocionais,
          com foco no boné promocional. Localizada na cidade de Apucarana - Paraná, a Capital Nacional do Boné,
          recebeu no ano de 2017 o Prêmio Mérito Empresarial promovido pela Associação Comercial e Industrial de Apucarana (ACIA)
          por seus 15 anos de trabalho. Através de sólidas parcerias, conquistadas através do respeito com seus clientes e fornecedores, 
          bem como o uso de matéria-prima de alta qualidade em todos os seus produtos, a Loverani faz do seu brinde promocional 
          a certeza de um excelente investimento. Entre em contato conosco, solicite um orçamento e iremos elaborar algumas opções 
          de modelos e cores de acordo com a sua proposta e divulgar a sua empresa, marca ou produto com beleza e qualidade!
        </span>
      </div>
    </div>

    
  </div>

  <!-- produtos -->

  <div class="mt-24 mb-24" style="display: flex; justify-content: center;">
    <div class="p-6 sm: p-6 md:p-6 lg:p-0 w-[1200px]" style="display: flex; justify-content: space-between;">
      <div class="flex-1 mr-12" style="display: flex; flex-direction: column;">
        <div class="flex justify-center mb-8">
        <span class="mb-4 text-[42px] font-bold"> Conheça nossos produtos:</span>
      </div>
        <div class="grid grid-cols-3 gap-12 mb-8" style="justify-content: center;">
        <?php
          while($row = pg_fetch_array($result)) {
            echo '<div id="indicators-carousel" class="relative w-full" data-carousel="static">
              <div style="background-color: #f2f2f2;" class="relative h-56 overflow-hidden rounded-lg md:h-96">
                  <div style="display: flex; align-items: center; justify-content: center; margin-top: 20px;">
                    <span class="text-[20px] font-bold">'.$row['name'] .'</span>
                  </div>
                   <!-- Item 1 -->
                  <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                      <img src="https://loverani.com.br/dashboard/uploads/'. $row['image1'].'" style="width: 200px;" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                  </div>
                  <!-- Item 2 -->
                  <div class="hidden duration-700 ease-in-out" data-carousel-item>
                      <img src="https://loverani.com.br/dashboard/uploads/' . $row['image2'].'" style="width: 200px;" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                  </div>
                  <!-- Item 3 -->
                  <div class="hidden duration-700 ease-in-out" data-carousel-item>
                      <img src="https://loverani.com.br/dashboard/uploads/'.$row['image3'].'" style="width: 200px;" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                  </div>
              </div>
              <!--  -->
              <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2"><button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button><button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button><button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button></div>
              
              <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                  <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                      <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                      </svg>
                      <span class="sr-only">Previous</span>
                  </span>
              </button>
              <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                  <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                      <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                      </svg>
                      <span class="sr-only">Next</span>
                  </span>
              </button>
            </div>';
          }
          ?>

        </div>
          
        <div style="display: flex; justify-content: center; margin-top: 4px;">
          <button  onclick="window.location.href = 'https://loverani.com.br/contato'" class="bg-orange-500 text-white rounded-md pl-4 pr-4 pt-2 pb-2 font-bold w-full">Solicitar orçamento</button>
        </div>
      </div>

      <!-- end carrosel -->
    </div>

    
  </div>

  <!-- end of produtos -->

  <div class="mt-24 mb-24 bg-orange-100 p-20 " style="display: flex; justify-content: center; flex-direction: row;">
    <div class="p-6 w-[1300px]" style="display: flex; justify-content: center;">
      <div class="flex-1 mr-12" style="display: flex; flex-direction: column;">
        <span class="mb-4 text-[42px] font-bold"> Fale conosco:</span></span>
        <span class="mb-4 text-[16px] font-normal"> Nos envie uma mensagem, que entraremos em contato!</span>
        
        <input disabled style="height: 50px; padding: 4px; margin-bottom: 12px;" type="nome" placeholder="Nome:" name="" id="">
        <input disabled style="height: 50px; padding: 4px; margin-bottom: 12px;" type="nome" placeholder="E-mail:" name="" id="">

        <textarea disabled style=" border: none; opacity: 50%; padding: 4px; margin-bottom: 12px;" name="" id="" cols="30" rows="10"></textarea>
        <button class="bg-orange-500 p-4 opacity-50 rounded-md" disabled>Em manutenção</button>
      </div>
    </div>
  </div>

  <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
    <div style="display: flex; width: 1200px; flex-direction: column;">
      <div style="display: flex; margin-top: 26px; margin-bottom: 26px; width: 100%; align-items: center; justify-content: center;">
        <img style="width: 150px;"
          src="loverani.png"
          alt=""
      />
      </div>
      <div style="display: flex; justify-content: center;">
        <span class="font-[16px]" style="color: #222; text-align: center; width: 60vw;">
          Somos uma empresa especializada em bonés personalizados, onde a
          criatividade encontra o acessório perfeito. Nossa missão é
          proporcionar a você a oportunidade de expressar sua personalidade
          única por meio de bonés exclusivos e sob medida.
        </span>
      </div>
      <div style="display: flex; justify-content: center; margin-top: 12px; align-items: center;">
        <img width="20px" src="instagram.png" alt="">
        <span>@loverani</span>
      </div>
      <br>
      <hr>
      <div style="display: flex; justify-content: center; margin-top: 14px; margin-bottom: 14px; align-items: center;">
        <span style="color: #222">
          © 2023 - Loverani - Todos os direitos reservados
        </span>
      </div>
    </div>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>
</html>
