<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>ProjectCV</title>
</head>

<body style="padding: 0; margin: 0;">
    <div class="flex justify-center items-center w-auto">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label for="nome" class="block text-gray-700 text-sm font-bold mb-2" for="username">Nome</label>
                <input type="text" id="nome" name="nome"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">E-mail</label>
                <input type="email" name="email"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="telefone" class="block text-gray-700 text-sm font-bold mb-2">Telefone</label>
                <input type="text" name="telefone"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="cargo" class="block text-gray-700 text-sm font-bold mb-2">Cargo</label>
                <input type="text" name="cargo"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <div class="inline-block relative w-64">
                    <label for="escolaridade" class="block text-gray-700 text-sm font-bold mb-2">Escolaridade</label>
                    <select name="escolaridade"
                        class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline cursor-pointer">
                        <option>Escolha uma Escolaridade</option>
                    </select>
                </div>
            </div>
            <div>
                <label for="obs" class="block mb-2 text-sm font-medium text-gray-900">Your
                    Obs:</label>
                <textarea name="observacoes" id="message" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                    placeholder="Escreva sua observações aqui"></textarea>
            </div>
            <div>
                <label for="arquivo" class="block text-gray-700 text-sm font-bold mb-2">Adicione seu Curriculo
                    aqui:</label>
                <input type="file" name="arquivo" accept=".doc, .docx, .pdf" id="arquivo">
            </div>
        </form>
    </div>
</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script></script>
