Fórmulário PHP com validações nos campos.
1 -> Recebimento dos dados informados via POST, usando o $_POST para armazenar os dados digitados.

2 -> Em seguida fiz uma validação com a função do PHP isset() pra verificar se a variável $_POST['enviado'] está iniciada ('enviado' foi o name que dei para o name do botão submit do formulário, então se o usuário clicar no botão a variável será iniciada).

3 -> Com a variável iniciada, agora vamos verificar se todos os imputs obrigatórios (nome, email e gênero) não estão vazios através da função empty(), então usamos um if para verificar se a variável está vazia, também usei o strlen para verificar se a estring $_POST['nome'] é menor que 3 ou maior que 100, caso uma dessas condições seja verdadeira, usamos o die() para interromper a execução.

4 -> Na parte do email e do website, fazemos a mesma lógica e podemos usar a função filter_var() para validar se o que foi recebido pelo $_POST é válido.
