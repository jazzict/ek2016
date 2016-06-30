<div class="container">
    <h1>PlayersController/index</h1>
    <div class="box">

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        
            <form method="post" action="<?php echo Config::get('URL');?>player/create">
                <label>New player: </label><input type="text" name="player_name" />
                <input type="submit" value='Create this player' autocomplete="off" />
            </form>
        </p>

        <?php if ($this->players) { ?>
            <table class="note-table">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>NAME</td>
                    <td>EDIT</td>
                    <td>DELETE</td>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($this->players as $key => $value) { ?>
                        <tr>
                            <td><?= $value->player_id; ?></td>
                            <td><?= htmlentities($value->player_name); ?></td>
                            <?php foreach ($this->$teams as $team) : ?>
                        <option value="<?= $team['id']; ?>"><?= $team['teams']; ?></option>
                        <?php endforeach; ?>
                            <td><a href="<?= Config::get('URL') . 'player/edit/' . $value->player_id; ?>">Edit</a></td>
                            <td><a href="<?= Config::get('URL') . 'player/delete/' . $value->player_id; ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php } else { ?>
                <div>No players yet. Create some !</div>
            <?php } ?>
    </div>
</div>
