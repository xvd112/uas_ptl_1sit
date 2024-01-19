
<body>
    <div id="visimisi">    
        <div class="lpp">    
                        <p class="p3"> Visi</p>
                        @foreach ($visimisis as $visimisi)
                            
                       
                    <p class="p4">"{{ $visimisi->visi }}."</p>
                
                    
                    <p class="p3"> Misi</p>

                    
                 
                        <p class="p4">"{{ $visimisi->misi }}."</p>
                        
                       @endforeach   
                </div>     
                </div>           
<br><br><br><br>
           
                  

             

   

</body>
</html>