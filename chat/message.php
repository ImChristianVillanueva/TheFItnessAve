
<style>



.modal-container {
    
  margin: 0 auto;
  padding-top: 600px;
  padding-left: 450px;
  position: fixed;
  overflow: hidden;
  width: 160%;
  height: 100%;
  top: 0;
  left: 0;
  opacity: 0.9;
  z-index: 50;
}

.modal-container img {
  display: block;
  margin: 0 auto;
  width: 40px;
  height: 40px;
  line-height: 20px;
  font-size: 22px;
  border: 0;
  border-radius: 3px;
  box-shadow: 0 5px 5px -5px #333;
  transition: background 0.3s ease-in;
}

.modal-container .modal-backdrop {
  height: 0;
  width: 0;
  opacity: 0;
  overflow: hidden;
  transition: opacity 0.2s ease-in;
}

.modal-container #modal-toggle {
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  margin: 0;
  opacity: 0;
  cursor: pointer;
}

.modal-container #modal-toggle:hover ~ button { background: #1E824C; }

.modal-container #modal-toggle:checked {
  width: 100vw;
  height: 100vh;
  position: fixed;
  left: 0;
  top: 0;
  z-index: 9;
  opacity: 0;
}

.modal-container #modal-toggle:checked ~ .modal-backdrop {
  background-color: rgba(0, 0, 0, 0.6);
  width: 100vw;
  height: 100vh;
  position: fixed;
  left: 0;
  top: 0;
  z-index: 9;
  pointer-events: none;
  opacity: 1;
}

.modal-container #modal-toggle:checked ~ .modal-backdrop .modal-content {
  background-color: #fff;
  max-width: 400px;
  width: 100%;
  height: 280px;
  padding: 10px 30px;
  position: absolute;
  left: calc(50% - 200px);
  top: 12%;
  border-radius: 4px;
  z-index: 999;
  pointer-events: auto;
  cursor: auto;
  box-shadow: 0 3px 7px rgba(0, 0, 0, 0.6);
}
@media (max-width: 400px) {

.modal-container #modal-toggle:checked ~ .modal-backdrop .modal-content { left: 0; }
}

.modal-container #modal-toggle:checked ~ .modal-backdrop .modal-content .modal-close {
  color: #666;
  position: absolute;
  right: 2px;
  top: 0;
  padding-top: 7px;
  background: #fff;
  font-size: 16px;
  width: 25px;
  height: 28px;
  font-weight: bold;
  text-align: center;
  cursor: pointer;
}

.modal-container #modal-toggle:checked ~ .modal-backdrop .modal-content .modal-close.button {
  top: initial;
  bottom: 20px;
  right: 20px;
  background: #4CAF50;
  color: #fff;
  width: 50px;
  border-radius: 2px;
  font-size: 14px;
  font-weight: normal;
}

.modal-container #modal-toggle:checked ~ .modal-backdrop .modal-content .modal-close.button:hover {
  color: #fff;
  background: #1E824C;
}

.modal-container #modal-toggle:checked ~ .modal-backdrop .modal-content .modal-close:hover { color: #333; }
</style>
</head>

<body>
<div class="modal-container">
  <input id="modal-toggle" type="checkbox">
  <img src="images/last.png" style="cursor:pointer"
    onclick="openModal();currentDiv(1)" class="w3-hover-shadow">
  <div class="modal-backdrop">
    <div class="modal-content" style="margin-top: 210px; margin-left: 570px; width: 280px; height: 310px;">
      <label class="modal-close" for="modal-toggle">x</label>
      <h6 style=" margin-top: -5px; margin-left: -20px; ">Online Chatbot <hr style="height:2px;border-width:0;color:gray;background-color:black; margin-top: 5px;"></h6>
      <p></p>
      <div id="userInput" style=" margin-top: 200px; margin-left: -25px; ">
                <input type="text" name="messages" id="messages" autocomplete="OFF" placeholder="Type Your Message Here." style="width: 210px; border-radius: 2px; " required>
                <input type="submit" value="Send" id="send" name="send" style="margin-right: -120px; border-radius: 2px;  ">
            </div>
    </div>
  </div>
</div><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createEleqment(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46156385-1', 'cssscript.com');
  ga('send', 'pageview');

</script>
</body>
</html>
