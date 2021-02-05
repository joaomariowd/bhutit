# Bhut It

Um programa que imprime na tela os números de **1** a **100**, de acordo com as seguintes regras:

- Para múltiplos de **3** imprime *BHUT* ao invés do número
- Para múltiplos de **5** imprime *IT* ao invés do número
- Para múltiplos de **3** e **5** imprime *BHUT IT*
- Para os outros números, imprime o próprio número.

Utiliza o *Design Pattern* **Chain of Responsibility**.

## Como utilizar

Abrir o Terminal no folder do projeto.

Rodar ```composer install``` para instalar as dependências.

Rodar ```./test.sh``` para executar os testes.

Rodar ```php index.php``` para executar a listagem do **1** ao **100** de acordo com as regras.

## Rodar testes individuais

Exemplo:

```php
vendor/bin/phpunit tests/Number/MultiplesOfFiveReturnsItTest.php
```