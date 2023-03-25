<?= $this->extend('admin/templates/index') ?>

<?= $this->section('main') ?>
<main>
    <div class="section">
        <div class="row">
            <div class="col s12 m9 right main-wrapper">
                <div class="menu-wraper text-color">

                    <?= showAlert(session()->getFlashdata('alert')) ?>
                    <?= showModalValidation(session()->getFlashdata('showModal')) ?>

                    <div class="heading-wrapper white">
                        <h2 class="header center-on-small-only">
                            <i class="bi bi-patch-check-fill purple-text header-icon"></i> My <span class="table-name">Certificate</span>s
                        </h2>
                        <h6>This Skills data is useful to provide an overview to website visitors about what skills have been mastered.</h6>
                        <hr class="left">
                    </div>


                    <div class="row content center-align">
                        <div class="card-panel hoverable cf card-skill">

                            <div class="col s12 card-col">
                                <h4>Certificate List</h4>
                                <div class="fixTableHead">
                                    <table class="skill-table responsive-table bordered highlight">
                                        <thead>
                                            <tr>
                                                <th class="center-align">#</th>
                                                <th>Serial Number</th>
                                                <th>Name</th>
                                                <th>Graduates</th>
                                                <th class="center-align">Options</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($certificate as $cert) : ?>
                                                <tr class="skill-wrapper">
                                                    <td class="center-align"><?= $no++ ?></td>
                                                    <td><?= $cert->certificate_code ?></td>
                                                    <td><?= $cert->name ?></td>
                                                    <td><?= $cert->graduates ?></td>
                                                    <td><?= $cert->type ?></td>
                                                    <td class="btn-wrapper">
                                                        <div class="show-on-small hide-on-med-and-up">
                                                            <a href="#edit-skill-modal-<?= $cert->certificate_code ?>" class="modal-trigger orange-text">Change</a>
                                                            <button data-href="<?= base_url() ?>/admin/skill/<?= $cert->certificate_code ?>" class="red-text delete-btn">
                                                                Delete
                                                            </button>
                                                        </div>
                                                        <span class="show-on-medium-and-up hide-on-small-only">
                                                            <a href="#edit-skill-modal-<?= $cert->certificate_code ?>" class="modal-trigger btn-floating btn-small waves-effect waves-light orange btn-skill left tooltipped" data-tooltip="Edit" data-delay="150" data-position="bottom">
                                                                <i class="bi bi-pencil-fill"></i>
                                                            </a>
                                                            <a href="#edit-skill-modal-<?= $cert->certificate_code ?>" class="modal-trigger btn-floating btn waves-effect waves-light orange btn-skill left tooltipped" data-tooltip="Edit" data-delay="150" data-position="bottom">
                                                                <i class="bi bi-pencil-fill"></i>
                                                            </a>

                                                            <button data-href="<?= base_url() ?>/admin/skill/<?= $cert->certificate_code ?>" class="btn-floating btn waves-effect waves-light red btn-skill left delete-btn tooltipped" data-tooltip="Delete" data-delay="150" data-position="bottom">
                                                                <i class="bi bi-trash-fill"></i>
                                                            </button>

                                                        </span>
                                                    </td>
                                                </tr>

                                                <!-- Edit Modal -->
                                                <div class="modal modal-small" id="edit-skill-modal-<?= $cert->certificate_code ?>">
                                                    <div class="modal-content contact-content">
                                                        <form action="<?= base_url() ?>/admin/skill_save" method="post" class="modal-form">
                                                            <?= csrf_field() ?>
                                                            <input type="hidden" name="id" value="<?= $cert->certificate_code ?>">
                                                            <div class="row card-panel card-form-modal left-align">

                                                                <h4>Skill Change</h4>

                                                                <div class="input-field col s12">

                                                                    <i class="bi bi-pie-chart-fill prefix form-icon-modal"></i>
                                                                    <input type="text" name="name" value="<?= oldCheck('name', $cert->name) ?>" id="name" class="validate" required>
                                                                    <label for="name">Name</label>

                                                                </div>

                                                            </div>

                                                            <div class="modal-footer col s12 white z-depth-1 edit">
                                                                <div class="row modal-button">
                                                                    <div class="col s6 center">
                                                                        <a class="modal-action btn-flat waves-effect waves-red modal-close">Cancel</a>
                                                                    </div>
                                                                    <div class="col s6 center">
                                                                        <button type="submit" class="btn-submit-modal modal-action btn-flat waves-effect waves-green">
                                                                            <span class="btn-text">Save</span>
                                                                            <img src="<?= base_url() ?>/loading.webp" class="loading-icon-modal">
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col s12 center card-col">
                                <a href="#modal-skills" class="modal-trigger btn btn-large blue waves-effect waves-dark hoverable"><i class="bi bi-plus left"></i> Add Skills</a>
                            </div>

                            <div class="col s12 card-col left-align">
                                <p class="grey-text darken-3">Total: <?= count($certificate) ?> Skills</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Add Modal -->
<div class="modal modal-small" id="modal-skills">
    <div class="modal-content contact-content">
        <form action="<?= base_url() ?>/admin/skill_save" method="post" class="modal-form">
            <?= csrf_field() ?>
            <div class="row card-panel card-form-modal">

                <h4>Add Skill</h4>

                <div class="input-field col s12">

                    <i class="bi bi-pie-chart-fill prefix form-icon-modal"></i>
                    <input type="text" name="skill_name" value="<?= old('skill_name') ?>" id="skill_name" class="validate" required>
                    <label for="skill_name">Skill Name</label>

                </div>

                <div class="col s5 valign-wrapper skill-icon">
                    <p class="icon"><i class="bi bi-bar-chart-line-fill"></i></p>
                    <p>Expertise Percentage: </p>
                </div>
                <div class="input-field col s12 m7">
                    <p class="range-field">
                        <input type="range" name="skill_value" id="skill" min="0" max="100" value="<?= old('skill_value') ?>" />
                    </p>

                </div>
            </div>

            <div class="modal-footer col s12 white z-depth-1">
                <div class="row modal-button">
                    <div class="col s6 center">
                        <a class="modal-action btn-flat waves-effect waves-red modal-close">Cancel</a>
                    </div>
                    <div class="col s6 center">
                        <button type="submit" class="btn-modal-submit modal-action btn-flat waves-effect waves-green">
                            <span class="btn-text">Save</span>
                            <img src="<?= base_url() ?>/loading.webp" class="loading-icon-modal">
                        </button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
<?= $this->endSection() ?>