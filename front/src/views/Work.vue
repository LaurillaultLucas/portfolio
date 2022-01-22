<template>
    <div class="work">
        <Header />
        <main>
            <ul>
                <li>
                    <img src="https://source.unsplash.com/random/360x360/?web" alt="">
                    <div>
                        <a href="#voir">Voir</a>
                    </div>
                </li>
                
            </ul>
        </main>
        <Footer />
    </div>
</template>

<script>
import Footer from '../components/Footer.vue'
import Header from '../components/Header.vue'
export default {
  components: { Header, Footer },
  name: 'Work'
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

main{

    ul{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding: 0;

        li{
            position: relative;
            list-style: none;
            height: 360px;
            width: 360px;
            background-color: lightgrey;
            margin: 0.5rem;

            div{
                position: absolute;
                top: 0;
                left: 0;
                display: none;
                height: 360px;
                width: 360px;
                background-color: rgba(#000000, 0.7);
                border: solid #ffff 1px;

                a{
                        color: #ffff;
                        text-decoration: none;
                        text-transform: uppercase;
                        padding: 1rem 1.25rem 1rem 1.45rem;
                        border: solid #ffff 1px;
                        font-size: 13px;
                        letter-spacing: 0.2rem;
                        text-align: center;
                        position: relative;
                        top: 47%;
                        left: 40%;
                   }
            }
        }
    }

    li:hover div{
        display: block;
    }

}

</style>