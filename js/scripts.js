$(function(){
    let current_li;

   $("#search").keyup(function(){
    let current_query = $("#search").val();
    if(current_query != ""){
      $("#portfolio li").hide();
      $("#portfolio li").each(function(){
        let current_keyword = $(this).attr("data-keyword");
  
        if(current_keyword.indexOf(current_query) >= 0){
          $(this).show();
        }
      });
    } else {
      $("#portfolio li").show();
    }
   })

    $("#portfolio").sortable({stop:
      function(){
        var list_contents = $("#portfolio").html();

        $.post("change.php", {list:list_contents});
    }
  }); 

    function setImg(src, id){
        $("#main").attr("src", src);
        let path = "./txt-files/"+id+".txt";
        $.get(path, function(data){
          $("#description p").html(data);
        });
     
    }

    $("#portfolio img").on('click', function(){
     let src = $(this).attr("src");
     let id = $(this).attr("id");
     current_li = $(this).parent();
     setImg(src, id);
    $("#frame").fadeIn();
    $("#overlay").fadeIn();
    });

    

    $("#overlay").on("click", function(){
        $(this).fadeOut();
        $("#frame").fadeOut();
    })

    $("#right").on("click", function(){
       if(current_li.is(":last-child")){
         next_li  = $("#portfolio li").first();
       } else {
         next_li  = current_li.next();
       }
       let next_src = next_li.children("img").attr("src");
       let id = next_li.children("img").attr("id");
       $("#main").attr("src", next_src);
       setImg(next_src, id);
       current_li = next_li;
    })

    $("#left").on("click", function(){
        if(current_li.is(":first-child")){
             prev_li  = $("#portfolio li").last();
           } else {
            prev_li = current_li.prev();
           }
       
        let prev_src = prev_li.children("img").attr("src");
        let id = prev_li.children("img").attr("id");
        setImg(prev_src, id);
        current_li = prev_li;
    })
});