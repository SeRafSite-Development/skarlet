<title>Login</title>
<link rel="stylesheet" href='<?php echo URL; ?>public/css/default.css'/>
<style>
    body{
        background-color: grey;
    }
</style>

<div id="login">
    <div>
    <p>Login</p>
    <form action="<?php echo URL; ?>admin_skarlet/action" method="post">
        <table>
            <?php if(isset($this->error)): ?>
            <tr><td><?php echo $this->error; ?></td></tr>
            <?php //unset($this->error); ?>
            <?php endif; ?>
            <tr>
                <td>E-mail:</td>
                <td><input type="text" name="login"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Login!"></td>
            </tr>
        </table>
    </form>
    </div>
</div>
