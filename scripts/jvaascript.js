<script>
        
        $("#send").click(function(){
            alert("hello world");
            $.post("sever.php",
            {
                message: $("#text").val,
            },
            null)
});

</script>