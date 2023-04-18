<h1> Criação de Usuário </h1>

<form action=" {{ route('projeto2.usuarios.store') }}" method="POST">
    @csrf
    <input name="name" type="text" placeholder="nome">
    <input name="objectguid" type="text" placeholder="Objeto Guia">
    <input name="email" type="email" placeholder="email@dominio.com">
    <input name="password" type="password" placeholder="senha">
    <input name="departamento_id" type="number" placeholder="departamento nº**">
    <input name="other_departament" type="number" placeholder="outro departamento">
    <button type="submit">Enviar</button>

</form>
