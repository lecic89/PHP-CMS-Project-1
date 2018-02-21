<select class="form-control" name="user_role" id="">

      <option value="<?php echo $user_role; ?>"><?php echo ucfirst($user_role); ?></option>
     
      <?php
        $roles = ["admin", "moderator", "subscriber", "banned"];

        foreach ($roles as $role) {

            if ($role !== $user_role) {
                echo "<option value='{$role}'>" . ucfirst($role) . "</option>";
            }

        }

        ?>
     
</select>