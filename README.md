wptheme-rdblog-v2
=================

Nova versão do tema de wordpress para clientes RD. Criado em maio de 2014.

=================

### Update Agosto/2015

- Adicionado **[Stylus]**, para auxiliar na criação de um blog.
- Criação de tasks com o **[Grunt]**.
- Controle de pacotes com o **[Node]**.

=================

#### Usando o [Stylus]

Primeiro é preciso instalar o grunt-cli na sua máquina para executar as tasks do grunt. Então no terminal digite:

```
npm install -g grunt-cli
```

Após instalado o grunt-cli podemos instalar os pacotes necessários para rodar o Stylus.

```
npm install
```

Para rodar o grunt
```
grunt
```

As tasks que configurei no grunt são para compilar o Stylus e uma e para dar um watch nos files .styl, para quando houver alguma alteração ele compilar automaticamente.


#### Exemplo de uso

Alterar as variáveis do stylus, no arquivo *variables.styl*

```
default-color = #1C5083
text-color = #4B4B4B
content-color = #8ba8c4
content-text-color = #6B6B6B
secondary-color = #F06E00
bg-top = '../images/bg_construir.png'
```

[Stylus]:https://learnboost.github.io/stylus/
[Grunt]:http://gruntjs.com/
[Node]:https://nodejs.org/
