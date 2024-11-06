<?php
    $tags = ['GitHub', 'PHP', 'CSS', 'HTML', 'Javascript', 'Tailwind'];
    $colors =  ['green', 'purple', 'cyan', 'rose', 'orange', 'teal', 'indigo'];
?>

<!-- Intro -->
<header class="flex items-center justify-center min-h-20" style="background-image: url('./img/Background_Intro.png'); background-repeat: no-repeat; background-size: cover;">
    <div class="max-w-screen-lg min-h-20 mx-auto w-full mt-32 mb-32">
        <div class="max-w-2xl flex flex-col items-center justify-center mx-auto">
            <div>
                <img class="h-28 w-28 object-cover rounded-full outline-2 outline-[#E3646E] outline border-4 border-gray-900" src="./img/quinho-photo.png" alt="Foto de Perfil">
            </div><!-- Foto -->

            <div class="mt-14">
                <p class="text-center fonte-inconsolata text-xl font-normal">Hello World! Meu nome é <span class="text-[#E3646E]">Quinho Pereira</span> e sou</p>
                <h1 class="text-center mt-2 text-[56px] font-bold fonte-asap leading-tight">Desenvolvedor Web</h1>
                <p class="text-center mt-5 text-[#878EA1] text-sm text-center">Transformo necessidades em aplicações reais, evolventes e funcionais. Desenvolvo sistemas através da minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.</p>
            </div><!-- Text -->
        </div><!-- Header -->
        <div class="mx-auto w-fit mt-20">
            <?php foreach ($tags as $posicao => $tag):?>
                <span class="bg-<?=$colors[$posicao]?>-400 rounded-full py-1 px-3 fonte-inconsolata text-base font-bold text-gray-900"><?=$tag?></span>
            <?php endforeach;?>
        </div><!-- Tags-->
    </div><!-- Container -->
</header>