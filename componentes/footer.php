 <?php
    $links = [
        [
            'nome'=>'Linkedin',
            'href'=>'',
            'src'=>'./img/LinkedinLogo.png'
        ],
        [
            'nome'=>'Instagram',
            'href'=>'',
            'src'=>'./img/InstagramLogo (1).png'
        ],
        [
            'nome'=>'GitHub',
            'href'=>'',
            'src'=>'./img/GithubLogo.png'
        ],
        [
            'nome'=>'E-mail',
            'href'=>'',
            'src'=>'./img/EnvelopeSimple.png'
        ],
    ]
 ?>
 
 
 <!-- Contato -->
 <footer class="" style="background-image: url('./img/Background_Contacts.png'); background-repeat: no-repeat; background-size: cover;">
    <div class="mt-32 mb-52 mx-auto w-fit">
        <div class="text-center mb-12">   
            <p class="text-xl fonte-inconsolata text-[#BB72E9]">Contato</p>
            <h2 class="text-[#E2E4E9] fonte-asap text-2xl mt-2 font-bold">Gostou do meu trabalho?</h2>
            <p class="text-[#C0C4CE] text-base font-normal mt-2 font-maven">Entre em contato ou acompanhe as minhas redes sociais!</p>
        </div><!-- Header -->

        <?php foreach($links as $link): ?>
            <a href="<?=$link['href']?>" class="flex items-center justify-start gap-x-3 bg-[#292C34] px-5 py-6 rounded-lg mb-4 border-2 border-solid border-[#292C34] hover:border-[#3996DB] transition">
                <img class="w-7 object-contain" src="<?=$link['src']?>" alt="Linkedin">
                <h4 class="flex-1"><?=$link['nome']?></h4>
                <img class="w-5 object-contain" src="./img/ArrowUpRight.png" alt="Acessar">
            </a><!-- Link -->
        <?php endforeach;?>
    </div>
</footer>