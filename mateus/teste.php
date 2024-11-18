<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h1 class="text-xl font-bold mb-4">Testando API Restful</h1>
        <form>
            <div class="mb-4">
                <label for="cep" class="block text-gray-700">CEP</label>
                <input type="text" id="cep" class="w-full px-3 py-2 border border-gray-300 rounded" />
            </div>
            <div class="mb-4">
                <label for="rua" class="block text-gray-700">Rua:</label>
                <input type="text" id="rua" class="w-full px-3 py-2 border border-gray-300 rounded" />
            </div>
            <div class="mb-4">
                <label for="bairro" class="block text-gray-700">Bairro:</label>
                <input type="text" id="bairro" class="w-full px-3 py-2 border border-gray-300 rounded" />
            </div>
            <div class="mb-4">
                <label for="cidade" class="block text-gray-700">Cidade:</label>
                <input type="text" id="cidade" class="w-full px-3 py-2 border border-gray-300 rounded" />
            </div>
            <div class="space-y-2">
                <button type="button" class="w-full px-4 py-2 bg-gray-200 border border-gray-400 rounded">Buscar endereço pelo CEP (GET)</button>
                <button type="button" class="w-full px-4 py-2 bg-gray-200 border border-gray-400 rounded">Criar novo (POST)</button>
                <button type="button" class="w-full px-4 py-2 bg-gray-200 border border-gray-400 rounded">Apagar pelo CEP (DELETE)</button>
                <button type="button" class="w-full px-4 py-2 bg-gray-200 border border-gray-400 rounded">Listar todos os endereços</button>
            </div>
        </form>
    </div>
</body>
</html>