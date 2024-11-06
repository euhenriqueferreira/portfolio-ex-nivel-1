<?php
    $projetos = [
        [
            'nome'=>'Travelgram',
            'descricao'=>'Rede social onde as pessoas mostram os registros de suas viagens pelo mundo',
            'src'=>'./img/projeto-1.png',
            'languages'=>['PHP', 'CSS', 'HTML', 'Javascript']
        ],
        [
            'nome'=>'Página de Receita',
            'descricao'=>'Página com o passo a passo de uma receita para cupcakes',
            'src'=>'./img/projeto-2.png',
            'languages'=>['PHP', 'CSS', 'HTML', 'Javascript']
        ],
        [
            'nome'=>'Tech News',
            'descricao'=>'Homepage de um portal de notícias sobre a área de tecnologia',
            'src'=>'./img/projeto-3.png',
            'languages'=>['PHP', 'CSS', 'HTML', 'Javascript']
        ],
        [
            'nome'=>'Refund',
            'descricao'=>'Um sistema para pedido e acompanhamento de reembolso ',
            'src'=>'./img/projeto-4.png',
            'languages'=>['PHP', 'CSS', 'HTML', 'Javascript']
        ],
        [
            'nome'=>'Página de turismo',
            'descricao'=>'Página com as principais informações para quem quer viajar para Busan',
            'src'=>'./img/projeto-6.png',
            'languages'=>['PHP', 'CSS', 'HTML', 'Javascript']
        ],
        [
            'nome'=>'Zingen',
            'descricao'=>'Landing Page completa e responsiva de um aplicativo de Karaokê',
            'src'=>'./img/projeto-5.png',
            'languages'=>['PHP', 'CSS', 'HTML', 'Javascript']
        ],
    ];


    $colors =  ['green', 'purple', 'cyan', 'rose', 'orange', 'teal', 'indigo'];
?>

<!-- Projetos -->
<section class="pb-36">
    <div class="mx-auto w-fit text-center pt-16">
        <p class="text-center fonte-inconsolata text-xl font-normal text-[#E3646E]">Meu trabalho</p>
        <h2 class="text-2xl font-bold text-white mt-2">Veja os projetos em destaque</h2>
    </div><!-- Header -->
    <div class="mt-14 mx-auto max-w-5xl gap-6 grid grid-cols-2">
        <?php foreach ($projetos as $projeto):?>
            <div class="w-full bg-[#292C34] rounded-xl flex justify-start gap-x-4 p-3 border-2 border-solid border-[#292C34] hover:border-[#878EA1] transition">
                <div>
                    <img src="<?=$projeto['src']?>" alt="Projeto" class="w-56 object-cover h-[156px] rounded-lg">
                </div>
                <div class="flex flex-col py-2 flex-1">
                    <h3 class="fonte-asap text-base font-bold text-white"><?=$projeto['nome']?></h3>
                    <p class="flex-1 text-sm text-[#C0C4CE] fonte-maven"><?=$projeto['descricao']?></p>
                    <div>
                        <?php foreach ($projeto['languages'] as $posicao => $language):?>
                            <span class="bg-<?=$colors[$posicao]?>-400 rounded-full py-1 px-3 fonte-inconsolata text-xs font-bold text-gray-900"><?=$language?></span>
                        <?php endforeach;?>
                    </div>
                </div>
            </div><!-- Projeto -->
        <?php endforeach;?>
    </div><!-- Grid -->
</section>
