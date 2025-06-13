<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jardineiros Conectados | Transforme seu Jardim</title>
    
    <link rel="icon" href="https://img.icons8.com/ios-filled/48/22c55e/plant-under-sun--v1.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-green: #15803d;
            --light-green-bg: #dcfce7;
            --white-card: #ffffff;
            --text-dark: #1f2937;
            --text-light: #4b5563;
            --cta-hover-green: #166534;
            --footer-bg: #064e3b; /* Tom de verde escuro para o footer */
            --footer-text: #a7f3d0; /* Tom de verde claro para texto do footer */
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }

        body {
            font-family: 'Poppins', Arial, sans-serif;
            background-color: var(--light-green-bg);
            color: var(--text-dark);
            line-height: 1.7;
        }
        
        body::-webkit-scrollbar { width: 12px; }
        body::-webkit-scrollbar-track { background: var(--light-green-bg); }
        body::-webkit-scrollbar-thumb {
            background-color: var(--primary-green);
            border-radius: 20px;
            border: 3px solid var(--light-green-bg);
        }

        .section { width: 100%; padding: 120px 5%; }
        .section-white { background-color: var(--white-card); }
        .section-green { background-color: var(--light-green-bg); }
        .container { max-width: 1200px; margin: 0 auto; }

        /* Estilos do Header, Main e Seções (mantidos da versão anterior) */
        .hero-section {
            position: relative; display: flex; align-items: center; justify-content: center;
            text-align: center; min-height: 100vh; color: var(--white-card); overflow: hidden;
        }
        .hero-background {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1466611653911-95081537e5b7?q=80&w=2070&auto=format&fit=crop') no-repeat center center/cover;
            animation: ken-burns 20s ease-out infinite; will-change: transform;
        }
        @keyframes ken-burns { from { transform: scale(1); } to { transform: scale(1.1); } }
        .hero-content { position: relative; max-width: 800px; }
        .hero-section h1 { font-size: 4.2rem; line-height: 1.2; text-shadow: 2px 2px 8px rgba(0,0,0,0.7); }
        .hero-section p { font-size: 1.5rem; margin-top: 20px; font-weight: 300; color: var(--white-card); text-shadow: 1px 1px 4px rgba(0,0,0,0.7); }

        h2 { font-size: 2.8rem; font-weight: 600; color: var(--primary-green); margin-bottom: 60px; text-align: center; }
        p { font-size: 1.1rem; color: var(--text-light); }

        .split-section { display: grid; grid-template-columns: 1fr 1fr; align-items: center; gap: 80px; }
        .split-content h3 { font-size: 2.2rem; color: var(--primary-green); margin-bottom: 20px; }
        .split-image { position: relative; overflow: hidden; border-radius: 16px; }
        .split-image img { width: 100%; display: block; }
        .split-image::after {
            content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            background-color: var(--light-green-bg); transform: translateX(-101%);
            transition: transform 1s cubic-bezier(0.83, 0, 0.17, 1);
        }
        .is-visible .split-image::after { transform: translateX(101%); }

        .how-it-works-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px; text-align: center; }
        .step { padding: 20px; transition: transform 0.3s ease, box-shadow 0.3s ease; border-radius: 16px; }
        .step:hover { transform: translateY(-10px); box-shadow: 0 20px 40px rgba(0,0,0,0.08); }
        .step-icon { width: 80px; height: 80px; margin: 0 auto 20px auto; background-color: var(--primary-green); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--white-card); font-size: 2rem; font-weight: 600; }
        .step h4 { font-size: 1.4rem; color: var(--text-dark); margin-bottom: 10px; }
        
        .cta-button {
            position: relative; display: inline-block; background-color: var(--primary-green);
            color: var(--white-card) !important; padding: 18px 35px; border-radius: 8px;
            font-size: 1.1rem; font-weight: 600; text-align: center; text-decoration: none;
            overflow: hidden; transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .cta-button:hover { background-color: var(--cta-hover-green); transform: translateY(-3px); }
        .cta-button .text { transition: transform 0.3s ease-out; display: inline-block; }
        .cta-button .arrow { position: absolute; top: 50%; left: 20px; transform: translateY(-50%); opacity: 0; transition: opacity 0.3s ease-out, left 0.3s ease-out; }
        .cta-button:hover .text { transform: translateX(15px); }
        .cta-button:hover .arrow { opacity: 1; left: 25px; }

        .final-cta { text-align: center; color: var(--white-card); background: linear-gradient(45deg, var(--primary-green), var(--cta-hover-green)); }
        .final-cta h2 { color: var(--white-card); }
        .final-cta p { color: var(--light-green-bg); max-width: 600px; margin: -40px auto 40px auto; }
        .cta-buttons-container { display: flex; justify-content: center; gap: 20px; flex-wrap: wrap; }
        .cta-button.secondary { background-color: var(--white-card); color: var(--primary-green) !important; }

        .scroll-animate { opacity: 0; transform: translateY(50px); transition: opacity 0.8s ease-out, transform 0.8s ease-out; }
        .scroll-animate.is-visible { opacity: 1; transform: translateY(0); }

        /* NOVO: Estilos do Footer */
        .site-footer {
            background-color: var(--footer-bg);
            color: var(--footer-text);
            padding: 80px 5% 40px 5%;
        }
        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 60px;
            margin-bottom: 60px;
        }
        .footer-about h4, .footer-links h4, .footer-social h4 {
            color: var(--white-card);
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        .footer-about p {
            color: var(--footer-text);
            font-size: 1rem;
        }
        .footer-links ul {
            list-style: none;
        }
        .footer-links ul li a {
            color: var(--footer-text);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .footer-links ul li a:hover {
            color: var(--white-card);
        }
        .footer-social-icons {
            display: flex;
            gap: 15px;
        }
        .footer-social-icons a {
            color: var(--footer-text);
            transition: color 0.3s ease, transform 0.3s ease;
            display: inline-block;
        }
        .footer-social-icons a:hover {
            color: var(--primary-green);
            transform: translateY(-3px);
        }
        .footer-social-icons svg {
            width: 28px;
            height: 28px;
            fill: currentColor;
        }
        .footer-copyright {
            text-align: center;
            padding-top: 40px;
            border-top: 1px solid var(--cta-hover-green);
            font-size: 0.9rem;
        }

        @media (max-width: 900px) {
            .hero-section h1 { font-size: 3rem; }
            .split-section { grid-template-columns: 1fr; gap: 40px; }
            .split-section.reverse .split-image { order: -1; }
            .footer-grid { grid-template-columns: 1fr; }
        }

    </style>
</head>
<body>

    <header class="hero-section">
        <div class="hero-background"></div>
        <div class="hero-content">
            <h1 class="scroll-animate">Conectando Mãos que Cuidam a Jardins que Inspiram</h1>
            <p class="scroll-animate" style="transition-delay: 200ms;">A ponte entre jardineiros apaixonados e o jardim dos seus sonhos.</p>
            <a href="#encontrar" class="cta-button scroll-animate" style="transition-delay: 400ms;">
                <span class="arrow">→</span>
                <span class="text">Encontrar meu Jardineiro</span>
            </a>
        </div>
    </header>

    <main>
        <section class="section section-white" id="como-funciona">
            <div class="container">
                <h2 class="scroll-animate">Simples, Rápido e Eficiente</h2>
                <div class="how-it-works-grid">
                    <div class="step scroll-animate" style="transition-delay: 100ms;"><div class="step-icon">1</div><h4>Descreva o Serviço</h4><p>Conte-nos o que seu jardim precisa. É um novo projeto, manutenção ou um cuidado especial?</p></div>
                    <div class="step scroll-animate" style="transition-delay: 200ms;"><div class="step-icon">2</div><h4>Receba Orçamentos</h4><p>Profissionais qualificados da sua região enviam propostas para você.</p></div>
                    <div class="step scroll-animate" style="transition-delay: 300ms;"><div class="step-icon">3</div><h4>Escolha e Agende</h4><p>Analise os perfis, escolha o jardineiro ideal e agende com total segurança.</p></div>
                </div>
            </div>
        </section>

        <section class="section section-green" id="encontrar">
            <div class="container"><div class="split-section"><div class="split-image scroll-animate"><img src="https://img.freepik.com/fotos-gratis/caminho-no-meio-das-arvores-de-folhas-verdes-com-o-sol-brilhando-atraves-dos-galhos_181624-4539.jpg?semt=ais_items_boosted&w=740" alt="Jardim residencial bem cuidado"></div><div class="split-content"><h3 class="scroll-animate">O Oásis que Você Merece</h3><p class="scroll-animate" style="transition-delay: 200ms;">Seu tempo é precioso e seu jardim é seu refúgio. Encontre profissionais de confiança para transformar seu espaço, ler avaliações de outros clientes e contratar com a certeza de um serviço bem feito.</p></div></div></div>
        </section>

        <section class="section section-white" id="cadastrar">
            <div class="container"><div class="split-section reverse"><div class="split-content"><h3 class="scroll-animate">Faça seu Talento Florescer</h3><p class="scroll-animate" style="transition-delay: 200ms;">Você é um profissional da jardinagem? Mostre seu trabalho para milhares de clientes em potencial, gerencie sua agenda e construa uma reputação sólida no mercado. Foque no que você ama fazer.</p></div><div class="split-image scroll-animate"><img src="https://img.freepik.com/fotos-gratis/bela-vista-aerea-com-paisagem-verde-floresta-no-crepusculo_74190-7496.jpg?semt=ais_hybrid&w=740" alt="Jardineiro profissional cuidando de plantas"></div></div></div>
        </section>

        <section class="section final-cta">
            <div class="container"><h2 class="scroll-animate">Pronto para Começar a Transformação?</h2><p class="scroll-animate" style="transition-delay: 200ms;">Seja encontrando o profissional perfeito para seu jardim ou expandindo seu negócio, o próximo passo está aqui.</p><div class="cta-buttons-container scroll-animate" style="transition-delay: 400ms;"><a href="#encontrar" class="cta-button"><span class="arrow">→</span><span class="text">Buscar um Profissional</span></a><a href="#cadastrar" class="cta-button secondary"><span class="arrow">→</span><span class="text">Sou Jardineiro</span></a></div></div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <h4>Jardineiros Conectados</h4>
                    <p>Nossa missão é cultivar conexões, transformando espaços e vidas através da jardinagem. Unimos paixão e tecnologia para um mundo mais verde.</p>
                </div>
                <div class="footer-links">
                    <h4>Navegação</h4>
                    <ul>
                        <li><a href="#como-funciona">Como Funciona</a></li>
                        <li><a href="#encontrar">Para Clientes</a></li>
                        <li><a href="#cadastrar">Para Jardineiros</a></li>
                    </ul>
                </div>
                <div class="footer-social">
                    <h4>Siga-nos</h4>
                    <div class="footer-social-icons">
                        <a href="#" aria-label="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.011 3.584-.069 4.85c-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07s-3.584-.012-4.85-.07c-3.252-.148-4.771-1.691-4.919-4.919-.058-1.265-.069-1.645-.069-4.85s.011-3.584.069-4.85c.149-3.225 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.85-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.072 4.947c.2 4.359 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072s3.667-.014 4.947-.072c4.359-.2 6.78-2.618 6.98-6.98.059-1.281.073-1.689.073-4.948s-.014-3.667-.072-4.947c-.2-4.359-2.618-6.78-6.98-6.98-1.281-.058-1.689-.072-4.948-.072zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.441 1.441 1.441 1.441-.645 1.441-1.441-.645-1.44-1.441-1.44z"/></svg>
                        </a>
                        <a href="#" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v2.385z"/></svg>
                        </a>
                        <a href="#" aria-label="Pinterest">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.372-12 12 0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738.098.119.117.223.084.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146 1.124.347 2.318.535 3.554.535 6.627 0 12-5.373 12-12s-5.373-12-12-12z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <p>&copy; 2025 Jardineiros Conectados. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.scroll-animate').forEach(el => observer.observe(el));
    });
    </script>

</body> 
</html>