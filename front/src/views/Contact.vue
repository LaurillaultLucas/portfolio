<template>
    <div class="contact">
        <main>
            <h1>Contact</h1>
            <form action="">
                <div>
                    <label for="name">Name</label>
                    <input id="name" name="name" type="text" required="">
                </div>
                <div>
                    <label for="email">email</label>
                    <input id="email" name="email" type="text" required="">
                </div>
                <div>
                    <label for="message">Message</label>
                    <textarea id="message" name="message" type="text" required="" style="height: 166px;"></textarea>
                </div>
                <button type="submit">Envoyé</button>
            </form>
        </main>
    </div>
</template>

<script>
export default {
  components: {},
  name: 'Contact'
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
    main{
        color: white;
        margin: auto;
        padding: 0.5rem;
        
        h1{
            font-size: 3rem;
        }

        form {
            width: 90vw;
            max-width: 664px;

            button{
                display: flex;
                justify-content: center;
                max-width: 500px;
                margin: 35px auto;
                padding: 11px;
                background-color: rgba(0, 0, 0, 0);
                color: white;
                width: 100%;
                border: solid #ffff 1px;
            }

            button:hover{
                background-color: #787880;
                transition: 0.5s;
            }

            div{
                display: flex;
                flex-direction: column;

                input, textarea{
                    background-color: rgba(0, 0, 0, 0);
                    color: white;
                    border: solid #ffff 1px;
                    outline: none;
                    padding: 5px;
                }

            }
        }
    }

</style>