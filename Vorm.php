<style>
    input {
        border-radius: 5px;
        padding: 3px;
    }

    .vorm {
        width: 300px;
        padding: 10px;

    }
</style>


<form method="get" action="vormitootlus.php">
    <div class="vorm">
        <label>Kasutajanimi: </label>
        <input type="text" name="username">
    </div>
    <div class="vorm">
        <label>Parool: </label>
        <input type="password" name="passwd">
    </div>
    <div>
        <input type="submit" value="Logi sisse">
    </div>
</form>