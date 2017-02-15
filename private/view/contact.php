    <div class="section-header">
        <form action="#formContact" method="POST" id="formContact" >
                <div>
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" />
                </div>
                <div>
                    <label for="courriel">Courriel :</label>
                    <input type="email" id="courriel" name="courriel" />
                </div>
                <div>
                    <label for="objet">Objet :</label>
                    <input type="text" id="objet" name="objet" />
                </div>
                <div>
                    <label for="message">Message :</label>
                    <textarea id="message" name="message" rows="5"></textarea>
                    <input type="hidden" name="idForm" value="contact" />
                </div>
                <div>
                    <input type="checkbox" id="newsletter" name="newsletter" value="subscribe" />
                    <label for="newsletter">Je souhaite recevoir la newsletter</label>
                </div>
                <div class="button">
                    <button type="submit" name="send">Envoyer votre message</button>
                    <div class="feedback">
                        <?php
                            //feedback formulaire contact
                            afficherVar('feedback');
                        ?>
                    </div>
                </div>
        </form>
    </div>