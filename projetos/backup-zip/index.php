<?php
// index.php - Portfólio Sonbatera
?>
<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sonbatera | A Batida Perfeita Para o Seu Show</title>
    <meta name="description" content="Emerson Silveira - Baterista profissional para gravações, turnês e eventos.">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Oswald:wght@500;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        stage: '#050505',
                        panel: '#111111',
                        gold: '#D4AF37',
                        goldhover: '#E5C048',
                        lighttext: '#FFFFFF',
                        mutedtext: '#A0A0A0'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Oswald', 'sans-serif']
                    },
                    animation: {
                        'marquee': 'marquee 25s linear infinite',
                    },
                    keyframes: {
                        marquee: {
                            '0%': { transform: 'translateX(0%)' },
                            '100%': { transform: 'translateX(-100%)' },
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <style>
        body { background-color: #050505; color: #FFFFFF; }
        .hero-bg {
            background-image: linear-gradient(to bottom, rgba(5,5,5,0.2) 0%, rgba(5,5,5,1) 100%), url('assets/images/hero/hero-bg.jpg');
            background-size: cover;
            background-position: center;
        }
        .marquee-container {
            overflow: hidden;
            white-space: nowrap;
        }
        .marquee-content {
            display: inline-block;
            padding-left: 100%;
            animation: marquee 20s linear infinite;
        }
        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 */
            height: 0;
        }
        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 0.5rem;
        }
        .gold-glow {
            box-shadow: 0 4px 30px rgba(212, 175, 55, 0.2);
        }
    </style>
</head>
<body class="antialiased font-sans bg-stage text-lighttext">

    <!-- Floating WhatsApp -->
    <a href="https://wa.me/557381702616?text=Olá%20Sonbatera,%20gostaria%20de%20falar%20sobre%20contratação!" target="_blank" class="fixed bottom-6 right-6 bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg z-50 transition-transform transform hover:scale-110">
        <i class="ph ph-whatsapp-logo text-3xl"></i>
    </a>

    <!-- HERO -->
    <header class="relative min-h-screen flex items-center justify-center hero-bg">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto mt-20">
            <span class="text-gold font-heading tracking-[0.2em] uppercase text-sm md:text-base mb-4 block">Emerson Silveira</span>
            <h1 class="font-heading text-5xl md:text-7xl lg:text-8xl font-bold uppercase leading-tight mb-6">A Batida Perfeita <br><span class="text-gold">Para o Seu Show.</span></h1>
            <p class="text-lg md:text-2xl text-gray-300 font-sans max-w-2xl mx-auto mb-10">Mais que manter o tempo, é sobre conduzir a emoção. Baterista profissional para gravações, turnês e eventos.</p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#contato" class="bg-gold hover:bg-goldhover text-stage font-bold font-heading text-xl uppercase px-8 py-4 rounded transition-all transform hover:scale-105 flex items-center gap-2">
                    <i class="ph-fill ph-drum"></i> Contratar Sonbatera
                </a>
                <div class="flex gap-4 mt-4 sm:mt-0">
                    <a href="https://www.youtube.com/@sonbateraEmersonSilveira" target="_blank" class="w-12 h-12 flex items-center justify-center rounded-full bg-panel hover:bg-gray-800 text-white transition-colors border border-gray-700">
                        <i class="ph-fill ph-youtube-logo text-2xl"></i>
                    </a>
                    <a href="https://www.instagram.com/sonbatera/" target="_blank" class="w-12 h-12 flex items-center justify-center rounded-full bg-panel hover:bg-gray-800 text-white transition-colors border border-gray-700">
                        <i class="ph-fill ph-instagram-logo text-2xl"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce opacity-70">
            <i class="ph ph-caret-down text-3xl text-gold"></i>
        </div>
    </header>

    <!-- TRAJETÓRIA -->
    <section class="py-24 bg-stage border-b border-gray-900" id="sobre">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1 relative">
                    <div class="absolute inset-0 bg-gold blur-3xl opacity-20 rounded-full"></div>
                    <img src="assets/images/bio/bio-profile.jpg" alt="Sonbatera no palco" class="relative z-10 rounded-xl shadow-2xl object-cover h-[500px] w-full border border-gray-800">
                </div>
                <div class="order-1 lg:order-2">
                    <h2 class="font-heading text-4xl md:text-5xl font-bold uppercase mb-6 text-white">O Ritmo Corre <span class="text-gold">Nas Veias.</span></h2>
                    <p class="text-mutedtext text-lg leading-relaxed mb-8">
                        Com uma trajetória marcada por talento, dedicação e paixão, meu contato com a bateria começou ainda no berço. Aos 9 anos, realizava as primeiras apresentações, e aos 15 iniciei minha jornada profissional nos palcos. Hoje, transformo cada apresentação em um momento único, unindo energia contagiante, precisão rítmica e presença marcante.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-panel flex items-center justify-center border border-gold border-opacity-30">
                                <i class="ph-fill ph-check-circle text-gold text-xl"></i>
                            </div>
                            <span class="text-xl font-medium">Técnica e Disciplina</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-panel flex items-center justify-center border border-gold border-opacity-30">
                                <i class="ph-fill ph-check-circle text-gold text-xl"></i>
                            </div>
                            <span class="text-xl font-medium">Experiência Consolidada (15+ anos)</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-panel flex items-center justify-center border border-gold border-opacity-30">
                                <i class="ph-fill ph-check-circle text-gold text-xl"></i>
                            </div>
                            <span class="text-xl font-medium">Excelência Musical & Presença de Palco</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- AUTORIDADE / MARQUEE -->
    <section class="py-16 bg-panel overflow-hidden border-b border-gray-900">
        <div class="text-center mb-8">
            <h3 class="text-sm font-heading tracking-widest text-mutedtext uppercase">Compartilhando os palcos com grandes referências</h3>
        </div>
        <div class="marquee-container">
            <div class="marquee-content font-heading text-4xl md:text-6xl text-gray-700 font-bold uppercase flex gap-12 items-center opacity-60 hover:opacity-100 hover:text-gold transition-colors duration-500 cursor-default">
                <span>Anderson Freire</span> <span class="text-gold">•</span>
                <span>Carlinhos Félix</span> <span class="text-gold">•</span>
                <span>Delino Marçal</span> <span class="text-gold">•</span>
                <span>Neide Martins</span> <span class="text-gold">•</span>
                <span>Pr. Lucas</span> <span class="text-gold">•</span>
                <span>Klev Soares</span> <span class="text-gold">•</span>
                <span>Ministério Renovo</span> <span class="text-gold">•</span>
                <span>Rafael Bomfim</span> <span class="text-gold">•</span>
                <span>Ministério Essência</span>
            </div>
        </div>
    </section>

    <!-- VÍDEOS -->
    <section class="py-24 bg-stage" id="videos">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mb-16">
            <h2 class="font-heading text-5xl md:text-6xl font-bold uppercase mb-4 text-white">Sinta a <span class="text-gold">Pressão.</span></h2>
            <p class="text-mutedtext text-xl">Assista ao vivo às performances com grandes nomes do Gospel.</p>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Video 1 -->
                <div class="bg-panel rounded-xl overflow-hidden border border-gray-800 gold-glow transition-transform hover:-translate-y-2">
                    <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/HU8sc0Jc5G8" title="Neide Martins" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="p-6">
                        <h3 class="font-heading text-2xl text-white uppercase mb-1">Neide Martins</h3>
                        <p class="text-mutedtext text-sm">Apresentação Ao Vivo</p>
                    </div>
                </div>
                <!-- Video 2 -->
                <div class="bg-panel rounded-xl overflow-hidden border border-gray-800 gold-glow transition-transform hover:-translate-y-2">
                    <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/5pDkT3nv09A" title="Ministério Renovo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="p-6">
                        <h3 class="font-heading text-2xl text-white uppercase mb-1">Ministério Renovo</h3>
                        <p class="text-mutedtext text-sm">Gravação Oficial</p>
                    </div>
                </div>
                <!-- Video 3 -->
                <div class="bg-panel rounded-xl overflow-hidden border border-gray-800 gold-glow transition-transform hover:-translate-y-2">
                    <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/BqOi9xLoeK0" title="Ministério Essência" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="p-6">
                        <h3 class="font-heading text-2xl text-white uppercase mb-1">Ministério Essência</h3>
                        <p class="text-mutedtext text-sm">Performance ao Vivo</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12">
                <a href="https://www.youtube.com/@sonbateraEmersonSilveira/featured" target="_blank" class="inline-flex items-center gap-2 text-gold hover:text-white font-heading text-xl uppercase transition-colors border-b-2 border-gold hover:border-white pb-1">
                    Ver mais no YouTube <i class="ph-bold ph-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- GALERIA (Opcional, com imagens locais) -->
    <section class="py-24 bg-panel border-t border-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <img src="assets/images/gallery/gallery-1.jpg" class="w-full h-64 object-cover rounded-lg grayscale hover:grayscale-0 transition-all duration-500 border border-gray-800" alt="Sonbatera 1">
                <img src="assets/images/gallery/gallery-2.jpg" class="w-full h-64 object-cover rounded-lg grayscale hover:grayscale-0 transition-all duration-500 border border-gray-800" alt="Sonbatera 2">
                <img src="assets/images/gallery/gallery-3.jpg" class="w-full h-64 object-cover rounded-lg grayscale hover:grayscale-0 transition-all duration-500 border border-gray-800" alt="Sonbatera 3">
                <img src="assets/images/gallery/gallery-4.jpg" class="w-full h-64 object-cover rounded-lg grayscale hover:grayscale-0 transition-all duration-500 border border-gray-800" alt="Sonbatera 4">
            </div>
        </div>
    </section>

    <!-- CTA FINAL -->
    <section class="py-32 relative text-center" id="contato">
        <div class="absolute inset-0 bg-gold blur-[100px] opacity-10 rounded-full max-w-3xl mx-auto"></div>
        <div class="relative z-10 max-w-3xl mx-auto px-4">
            <h2 class="font-heading text-5xl md:text-7xl font-bold uppercase mb-6 text-white leading-tight">Pronto para elevar o nível <br><span class="text-gold">da sua banda?</span></h2>
            <p class="text-xl text-gray-300 mb-10">Leve profissionalismo e segurança rítmica para o seu próximo projeto musical.</p>
            <a href="https://wa.me/557381702616?text=Olá%20Sonbatera,%20gostaria%20de%20falar%20sobre%20contratação!" target="_blank" class="inline-flex items-center gap-3 bg-gold hover:bg-goldhover text-stage font-bold font-heading text-2xl uppercase px-12 py-5 rounded-lg transition-all transform hover:scale-105 shadow-[0_0_40px_rgba(212,175,55,0.4)]">
                <i class="ph-fill ph-whatsapp-logo text-3xl"></i> Falar no WhatsApp
            </a>
            <p class="mt-6 text-mutedtext text-sm">+55 73 8170-2616</p>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-black py-8 border-t border-gray-900 text-center">
        <p class="text-gray-500 text-sm font-sans">&copy; <?php echo date('Y'); ?> Emerson Silveira (Sonbatera). Todos os direitos reservados.</p>
    </footer>

</body>
</html>
