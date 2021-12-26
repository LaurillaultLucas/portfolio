<template>
    <footer class="footer">
        <div class="link">
            <ul>
                <li class="first-link"><a target="_blank" href="https://github.com/LaurillaultLucas"><i class="fab fa-github-square"></i></a></li>
                <li class="second-link"><a target="_blank" href="https://www.linkedin.com/in/lucas-laurillault/"><i class="fab fa-linkedin"></i></a></li>
            </ul>
        </div>
        <div class="info">
            <p class="paragraph-info">Développé avec VueJS et WordPress</p>
        </div>
    </footer>
</template>

<script>

export default {
  name: 'Footer'
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

 .footer{
     display: flex;
     flex-direction: column;
     justify-content: center;
     text-align: center;

     ul{
         padding: 0;
         margin: 0;
    
        li{
            display: inline;
            list-style: none;
            text-decoration: none;

            a{
                color: white;

                i{
                    font-size: 40px;
                }
            }
       }   
    }

    .second-link{
                margin-left: 10px;
            }

    .paragraph-info{
           color: lightgray;
           font-size: 0.8rem;
       }
 }

</style>