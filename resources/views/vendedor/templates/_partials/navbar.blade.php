<nav>
    <ul style="background-color: #e0dede;padding: 10px; margin: 0px;">
        <li style="display: inline;"><a href=" {{ route('vendedor.index') }} " style="text-decoration:none;margin-right: 30px;">Index</a></li>
        <li style="display: inline;"><a href=" {{ route('vendedor.produto.adicionar') }} " style="text-decoration:none;margin-right: 30px;">Produtos</a></li>
        <li style="display: inline;"><a href=" {{ route('vendedor.fornecedor.adicionar') }} " style="text-decoration:none;margin-right: 30px;">Fornecedores</a></li>
        <li style="display: inline;"><a href=" {{ route('vendedor.sair') }} " style="text-decoration:none;float: right;">Sair</a></li>
    </ul>
</nav>