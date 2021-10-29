<style>
            .main-login{
                    margin: 40px auto;
                    width: 30%;
                    height: 60vh;
                    color: white;
                    background: #5F9EA0;
                    text-align: center;
                    border: 1px solid #B0C4DE;
                    border-bottom: none;
                    border-radius: 10px 10px 10px 10px;
                    padding: 20px;
                }
                .form-dk{
                    width: 70%;
                    height: 40vh;
                    margin: auto;
                    margin-top: 5px;
                    border-radius: 10px 10px 10px 10px;
                    padding: 20px;
                    border: 1px solid #B0C4DE;
                    background: white;
                    color: #333;
                }
                .input-group-login{
                    margin: 10px 0px 10px 0px;
                }
                .input-group-login label{
                    display: block;
                    text-align: left;
                    margin: 3px;
                }
                .input-group-login input{
                    height: 30px;
                    width: 93%;
                    padding: 5px 10px;
                    font-size: 16px;
                    border-radius: 5px;
                    border: 1px solid gray;
                }
                .btn{
                    padding: 10px;
                    font-size: 15px;
                    color: white;
                    background: #5F9EA0;
                    border: none;
                    border-radius: 5px;
                }
        </style>
    <section class="sections">
    <div class="main-login">
        <h2>Admin</h2>
        <div class="main-form">
            <form class="form-dk" action="handle-admin.php" method="POST">
                <div class="input-group-login">
                    <label><b>Admin name:</b></label>
                    <input type="text" name="adminName">
                </div>
                <div class="input-group-login">
                    <label><b>Password:</b></label>
                    <input type="password" name="password">
                </div>
                <div class="input-group-login">
                <button type="submit" name="signInByAdmin" class="btn"><b> Sign in </b></button>
                </div>
            </form>
        </div>
    </section>
