<?php use \App\Enums\RoleEnum; ?>
<div class="form theme-form">
    <div class="row">
        <div class="col-sm-6">
            <div class="mb-3">
                <label>First Name<span>*</span></label>
                <input class="form-control" type="text" name="first_name"
                    value="<?php echo e(isset($user->first_name) ? $user->first_name : old('first_name')); ?>"
                    placeholder="Enter First Name">
                <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="mb-3">
                <label>Last Name<span>*</span></label>
                <input class="form-control" type="text" name="last_name"
                value="<?php echo e(isset($user->last_name) ? $user->last_name : old('last_name')); ?>"
                placeholder="Enter Last Name">
                <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="mb-3">
                <label>Email<span>*</span></label>
                <input class="form-control" type="email" id="email"
                    value="<?php echo e(isset($user->email) ? $user->email : old('email')); ?>" name="email"
                    placeholder="Enter Email">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="mb-3">
                <label>Confirmation Email<span>*</span></label>
                <input class="form-control" type="email"
                    value="<?php echo e(isset($user->email) ? $user->email : old('confirm_email')); ?>" name="confirm_email"
                    placeholder="Enter Confirm Email">
                <?php $__errorArgs = ['confirm_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
    </div>

    <?php if(!isset($user->id)): ?>
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label>Password<span>*</span></label>
                    <input class="form-control" type="password" id="password" name="password" placeholder="Enter Password"
                        autocomplete="off">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label>Confirm Password<span>*</span></label>
                    <input class="form-control" type="password" id="confirm_password" name="confirm_password"
                        placeholder="Enter Confirm Password" autocomplete="off">
                    <?php $__errorArgs = ['confirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-sm-6">
            <div>
                <label>Phone<span>*</span></label>
                <div class="row phone-select">
                    <div class="col-2 pe-0">
                        <select class="select-2 form-control select-country-code" id="country_code"
                        name="country_code" data-placeholder="">
                            <?php
                                $default = old('country_code', $user->country_code ?? 1);
                            ?>
                            <?php $__currentLoopData = \App\Helpers\Helpers::getCountryCode(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option class="option" value="<?php echo e($option->calling_code); ?>"
                                    data-image="<?php echo e(asset('assets/images/flags/' . $option->flag)); ?>"
                                    <?php if($option->calling_code == $default): ?> selected <?php endif; ?>
                                    data-default="<?php echo e($default); ?>">
                                    <?php echo e($option->calling_code); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-10 ps-0">
                        <input class="form-control" type="number" name="phone"
                            value="<?php echo e(isset($user->phone) ? $user->phone : old('phone')); ?>" placeholder="Enter Phone">
                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="mb-3">
                <label>Birth Date</label>
                <input class="datepicker-here form-control" type="text" name="dob"
                    value="<?php echo e(isset($user->dob) ? $user->dob : old('dob')); ?>" data-language="en"
                    placeholder="Enter Birth Date">
                <?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="mb-3">
                <label>Gender<span>*</span></label>
                <select class="form-select" name="gender">
                    <option value="" selected hidden disabled>Select Gender</option>
                    <option value="male"
                        <?php if(isset($user->gender)): ?> <?php if('male' == $user->gender): ?> selected <?php endif; ?> <?php endif; ?> <?php echo e(old('gender') == 'male' ? 'selected' : ''); ?>><?php echo e(__('Male')); ?></option>
                    <option value="female"
                        <?php if(isset($user->gender)): ?> <?php if('female' == $user->gender): ?> selected <?php endif; ?> <?php endif; ?> <?php echo e(old('gender') == 'female' ? 'selected' : ''); ?>><?php echo e(__('Female')); ?></option>
                </select>
                <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
    
        <div class="col-sm-6">
            <div class="mb-3">
                <?php
                    $image = $user->getFirstMedia('image');
                ?>
                <label>Avatar</label>
                <input class="form-control" type="file" name="image">
    
                <?php if(isset($user)): ?>
                    <div class="mt-3 comman-image">
                        <?php if($image): ?>
                            <img src="<?php echo e($image->getUrl()); ?>" alt="Image" class="img-thumbnail img-fix" height="20%"
                                width="20%">
                            <div class="dz-preview">
                                <a href="<?php echo e(route('admin.user.removeImage', $user?->id)); ?>" class="dz-remove text-danger"
                                    data-bs-target="#tooltipmodal" data-bs-toggle="modal">Remove</a>
                            </div>
                        <?php endif; ?>
                    </div>
    
                    <!-- Remove File Confirmation-->
                    <div class="modal fade" id="tooltipmodal" tabindex="-1" role="dialog" aria-labelledby="tooltipmodal"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Confirm delete</h5>
                                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h4 class="mb-3"> Are you sure want to delete ?</h4>
                                    <p>This Item Will Be Deleted Permanently. You Can not Undo This Action.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
                                    <?php if($user->id): ?>
                                        <a href="<?php echo e(route('admin.user.removeImage', $user->id)); ?>"
                                            class="btn btn-danger">Delete</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="mb-3">
                <label>Role<span>*</span></label>
                <select class="form-select" name="role_id">
                    <option value="" selected disabled hidden>Select Role</option>
                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($role->name !== RoleEnum::ADMIN): ?>
                            <option value="<?php echo e($role->id); ?>"
                                <?php if(isset($user->roles)): ?> <?php if(old('role_id', $user->roles->pluck('id')->first()) == $role->id): echo 'selected'; endif; ?> <?php endif; ?>><?php echo e($role->name); ?>

                            </option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="mb-3">
                <label>Status</label>
                <select class="form-select" name="status">
                    <option value="1" <?php echo e(!($user->status ?? 1) == 0 ? 'selected' : ''); ?>><?php echo e(__('Active')); ?>

                    </option>
                    <option value="0" <?php echo e(($user->status ?? 1) == 0 ? 'selected' : ''); ?>><?php echo e(__('Deactive')); ?>

                    </option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="mb-3">
                <label>Country</label>
                <select class="form-select" id="country" name="country_id">
                    <option value="" selected disabled hidden>Select Country</option>
                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key); ?>" <?php echo e(old('country_id', $user->country_id) == $key ? 'selected' : ''); ?>>
                            <?php echo e($value); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="mb-3">
                <label>State</label>
                <select class="form-select" id="state" name="state_id">
                    <?php
                        $states = App\Models\State::where('country_id', $user->country_id)->get();
                    ?>
                    <option value="" selected disabled hidden>Select State</option>
                    <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($state->id); ?>" <?php echo e($user->state_id == $state->id ? 'selected' : ''); ?>>
                            <?php echo e($state->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="mb-3">
                <label>City</label>
                <input class="form-control" type="text" name="location"
                    value="<?php echo e(isset($user->location) ? $user->location : old('location')); ?>" placeholder="Enter City">
                <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="mb-3">
                <label>Postal Code</label>
                <input class="form-control" type="number" name="postal_code"
                    value="<?php echo e(isset($user->postal_code) ? $user->postal_code : old('postal_code')); ?>"
                    placeholder="Enter Postal Code">
                <?php $__errorArgs = ['postal_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label>About Me</label>
                <textarea class="form-control" id="exampleFormControlTextarea4" rows="2" name="about_me"
                    placeholder="About Me"><?php echo e(isset($user->about_me) ? $user->about_me : old('about_me')); ?></textarea>
                <?php $__errorArgs = ['about_me'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label>Bio</label>
                <textarea class="form-control" id="" rows="4" name="bio" placeholder="Bio"><?php echo e(isset($user->bio) ? $user->bio : old('bio')); ?></textarea>
                <?php $__errorArgs = ['bio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div>
                <button type="submit" class="btn btn-primary"><?php echo e(__('save')); ?></button>
            </div>
        </div>
    </div>
</div>

<?php /**PATH C:\laragon\www\cuba-laravel\resources\views/admin/user/fields.blade.php ENDPATH**/ ?>