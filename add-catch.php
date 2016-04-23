<?php include 'php/templates/header.php'; ?>
    
<div class="ui text container">
    <p>&nbsp;</p>
    <div class="ui segment" style="max-width: 550px; margin: 0 auto">
        <h1 class="ui center aligned icon header">
            <i class="anchor icon"></i>
            Catch
            <div class="sub header">dddd.</div>
        </h1>
        <form class="ui form">
            <h2 class="ui dividing header">Profile</h2>
            <div class="fields">
                <div class="four wide field">
                    <label>Weight</label>
                    <div class="ui input">
                        <input type="text" name="d" placeholder="Weight">
                    </div>
                </div>
                <div class="four wide field">
                    <label>Amount</label>
                    <div class="ui input">
                        <input type="text" name="d" placeholder="Gross tonnage">
                    </div>
                </div>
                <div class="four wide field">
                    <label>For Sell</label>
                    <div class="ui toggle checkbox">
                        <input type="checkbox" name="public">
                        <label></label>
                    </div>
                </div>
                <div class="four wide field">
                    <label>Breath</label>
                    <div class="ui input">
                        <input type="text" name="d" placeholder="Breath">
                    </div>
                </div>
            </div>
            <div class="fields">
                <div class="four wide field">
                    <label>IMO</label>
                    <div class="ui input">
                        <input type="text" name="name" placeholder="IMO">
                    </div>
                </div>
                <div class="four wide field">
                    <label>MMSI</label>
                    <div class="ui input">
                        <input type="text" name="name" placeholder="MMSI">
                    </div>
                </div>
                <div class="four wide field">
                    <label>AIS</label>
                    <select name="day" class="ui fluid dropdown">
                        <option value="">Day</option>
                        <?php for($i = 1; $i < 31; $i++) { ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="four wide field">
                    <label>Year</label>
                    <select name="day" class="ui fluid dropdown">
                        <option value="">Day</option>
                        <?php for($i = 1; $i < 31; $i++) { ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <button class="ui fluid positive button" type="submit">Add</button>
        </form>
    </div>
    <p>&nbsp;</p>
    <script>
       $('form').on('submit', function(e)
       {
           e.preventDefault()
           $('.negative.message').addClass('hidden')

           $.ajax({
               url     : 'http://fishevents-php-yamiodymel.c9users.io/application/profile/' + $.cookie('username'),
               data    : $('form').serialize(),
               type    : "PUT",
               dataType: 'json',
               success: function(msg)
               {
                   $('.negative.message').addClass('hidden')
               },
                error: function(xhr, ajaxOptions, thrownError)
                { 
                   $('.negative.message').removeClass('hidden')
                }
           });
       })
    </script>
</div>
    
<?php include 'php/templates/footer.php'; ?>
    