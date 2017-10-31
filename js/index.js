if(localStorage.access_token == undefined){

            ReactDOM.render(
    <div id="login-box">


        <div id="login-box-color"></div>


        <h1>HELLO!</h1>
        <a href={authurl}> <input class='twitch-button' type='submit' value='Connect with Twitch' /> </a>

    </div>,
        document.getElementById('root')

    );
}else{


        ReactDOM.render(
            <div id="content">
                <header id="headernav">
                <p></p>
                </header>
                <div id="twitch-chat">
                    <iframe frameborder="0" 
                        scrolling="no" 
                        id="chat_embed" 
                        src={"https://www.twitch.tv/"+localStorage.getItem("display_name")+"/chat"} 
                        height="700" 
                        width="350" 
                        position="absolute"
                        align="right"  >
                    </iframe> 
                </div>
            </div>,
            document.getElementById('root')
    );

}