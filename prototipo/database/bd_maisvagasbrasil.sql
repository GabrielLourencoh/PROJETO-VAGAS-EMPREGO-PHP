-- Criando o banco de dados
CREATE DATABASE bd_maisvagasbrasil;

-- Usando o banco de dados
USE bd_maisvagasbrasil;

-- Tabela de usuários
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    profissao VARCHAR(100) NOT NULL,
    senha VARCHAR(50) NOT NULL
);

-- Tabela de vagas 
CREATE TABLE vagas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_vaga VARCHAR(255) NOT NULL UNIQUE
);

-- Tabela de inscrições para vagas
CREATE TABLE vagas_inscricoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_vaga VARCHAR(255) NOT NULL,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    descricao TEXT
);

-- Tabela de grupos
CREATE TABLE grupos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL
);

-- Tabela de cards
CREATE TABLE cards (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo_card VARCHAR(255) NOT NULL,
    descricao TEXT,
    imagem_url VARCHAR(500),
    link_vaga VARCHAR(500),
    grupo_id INT,
    FOREIGN KEY (grupo_id) REFERENCES grupos(id) ON DELETE CASCADE
);

-- Inserindo grupos
INSERT INTO grupos (titulo) VALUES
('Desenvolvimento Web'),
('Ciência de Dados'),
('Análise de Dados'),  
('Engenharia de Software');

-- Inserindo vagas
INSERT INTO vagas (nome_vaga) VALUES
('analista_dados_junior'),
('analista_dados_senior'),
('cientista_dados_pleno'),
('cientista_dados_senior'),
('desenvolvedor_full_stack_junior'),
('desenvolvedor_junior_back_end'),
('desenvolvedor_pleno'),
('estagiario_desenvolvimento_web'),
('engenheiro_software_senior'),
('estagiario_cientista_dados'),
('estagiario_analise_dados'),
('estagiario_engenharia_software');

-- Inserindo cards
INSERT INTO cards (titulo_card, descricao, imagem_url, link_vaga, grupo_id) VALUES
('Estagiário de Desenvolvimento Web', 'HTML, CSS, JavaScript (básico ou intermediário)', 'img/pc.png', 'vaga-desenvolvimento-web.html', 1),
('Desenvolvedor Júnior Back-end', 'Python (Django ou Flask)', 'img/programacao.png', 'vaga-desenvolvedor-junior-back-end.html', 1),
('Desenvolvedor Pleno', 'HTML, CSS, JavaScript, React.js, Controle de versão - Git e Github', 'img/design-front.png', 'vaga-desenvolvedor-pleno.html', 1),
('Estagiário de Ciência de Dados', 'Conhecimento em Python, pandas, SQL e análise exploratória de dados', 'img/ciencia-dados-1.png', 'vaga-estagiario-ciencia-de-dados.html', 2),
('Cientista de Dados Sênior', 'Experiência avançada em Machine Learning, Deep Learning, Python, R e Big Data. Capacidade de construir pipelines de dados complexos.', 'img/ciencia-dados-2.png', 'vaga-cientista-de-dados-senior.html', 2),
('Cientista de Dados Pleno', 'Expertise em Machine Learning, Python, R, SQL, e Big Data', 'img/ciencia-dados-3.png', 'vaga-cientista-de-dados-pleno.html', 2),
('Analista de Dados Sênior', 'Conhecimento em modelagem de dados, análise estatística e ferramentas de visualização', 'img/analista-dados-1.png', 'vaga-analista-de-dados-Senior.html', 3),
('Estagiário de Análise de Dados', 'Conhecimento em Excel, SQL e Python básico', 'img/analista-ddos-2.png', 'vaga-estagiário-de-análise-de-dados.html', 3),
('Analista de Dados Júnior', 'Experiência com Power BI, SQL, Excel avançado e Python', 'img/analista-dados-3.png', 'vaga-Analista-de-Dados-Júnior.html', 3),
('Estagiário de Engenharia de Software', 'C#, Java, ou Python básico', 'img/eng-software-1.png', 'vaga-Estagiário-de-Engenharia-de-Software.html', 4),
('Desenvolvedor Full Stack Júnior', 'Node.js, React.js, SQL, Git', 'img/eng-software-2.png', 'vaga-Desenvolvedor-Full-Stack-Júnior.html', 4),
('Engenheiro de Software Sênior', 'Experiência em C++, Java, Microserviços', 'img/eng-software-3.png', 'vaga-Engenheiro-de-Software-Sênior.html', 4);