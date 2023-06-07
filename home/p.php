<style>
    *{
        margin-bottom: 10px;
        margin-top: 10px;
    }
    #xvd1{
        background-color: #23232e;
        width: 90%;
        height: fit-content;
        padding: 0.89vw;
        border-radius: 15px
    }@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    #dvi1{
        background-color: #23232e;
        width: 50vw;
        height: fit-content;
        padding: 5px;
        font-size: 19px;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        color: white;        
        border-radius: 3.5px;
    }@import url('https://fonts.googleapis.com/css2?family=Ysabeau&display=swap');
    #xdvi2{
        height: fit-content;
        padding:10px;
        font-family: 'Ysabeau', sans-serif;
        background-color: rgba(0, 255, 72,0.666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666);
        border-radius: 15px;
        font-size: 20;
    }
    #dvi11{        
        width: 100%;
        height: fit-content;
        padding: 5px;
        font-size: 10px;
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        margin-bottom: 1.5vh;
        border-radius: 3.5px;
        color: whitesmoke;
    }
</style>
<div id = "xvd1">
    <div id="dvi1">
        <?php echo $post['user']; ?>
    </div>
    <div id="xdvi2">
        <?php echo $post['post']; ?>
    </div>
    <div id="dvi11">
        <?php echo $post['date']; ?>
    </div>

</div>
