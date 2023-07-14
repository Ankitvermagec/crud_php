<?php 

// $a = 4;

// $i= ++$a + ++$a;

// echo $i;
// echo $a;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <div>
                <label for="">Film Industry :</label>
                <select class="form-select" name="Film_Industry" id="">
                  <script>
                    cast = ['Bollywood','Hollywood','Tollywood']
                    cast.forEach(c => {
                        document.write(`<option value="${c}">${c}</option>`)
                    });
                  </script>
                
                    <!-- <option value="">Boo</option> -->
                </select>

            </div>

<script>
                        language = ['English', 'Hindi', 'South', 'Chinese', 'Other']
                        language.forEach(i => {
                            document.write(`<div class="form-check">
  <input class="form-check-input" name="${i}" type="checkbox" value="${i}" id="${i}">
  <label class="form-check-label" for="${i}">
  ${i}
  </label>
</div>`)
                        });
                </script> 
   <div>
<select class="form-select" name="ankit" id="">
<script>
     
    //  we cant use the name as a variable

    arr = ["ankit","frog","html","girl","bsnl"]
    arr.forEach(i => {
        document.write(`
        
        <option value="${i}">${i}</option>
        
        `)
    }); 

    //  for (let i = 0; i < name.length; i++) {
    //    document.write('ankit \n')
        
    //  }
</script>
</select>
</div>
<select name="ankit" id="">
<script>
        name = ['ankit','frog','html','girl','bsnl']

        for (let i = 0; i < 5; i++) {
            document.write('ankit')
            
        }
    
    </script>
    <!-- <option value="">ankit</option>
    <option value="">sunil</option>
    <option value="">rewa</option>
    <option value="">frog</option> -->
</select>
</body>
</html>
