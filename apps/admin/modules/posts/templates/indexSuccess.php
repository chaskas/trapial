<!-- Content -->
<div id="content">

        <!-- Box -->
        <div class="box">
                <!-- Box Head -->
                <div class="box-head">
                        <h2 class="left">Listado de Noticias</h2>
                </div>
                <!-- End Box Head -->

                <!-- Table -->
                <div class="table">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                        <!--<th width="13"><input type="checkbox" class="checkbox" /></th>-->
                                        <th>Fecha</th>
                                        <th>T&iacute;tulo</th>
                                        <th>Contenido</th>
                                        <th>Autor</th>
                                        <th width="110" class="ac">Opciones</th>
                                </tr>

                                <?php $count = 0 ?>
                                <?php foreach ($trapial_postss as $trapial_posts): ?>
                                <tr <?php if($count%2==0)echo "class='odd'"; ?>>
                                        <!--<td><input type="checkbox" class="checkbox" id="<?php echo $trapial_posts->getId() ?>"/></td>-->
                                        <td><?php echo tools::formatDate($trapial_posts->getCreatedAt()) ?></td>
                                        <td><h3><a href="<?php echo url_for('posts/edit?id='.$trapial_posts->getId()) ?>"><?php echo $trapial_posts->getPostTitle() ?></a></h3></td>
                                        <td><?php echo tools::getResumeShort(strip_tags($trapial_posts->getRawValue()->getPostContent())) ?></td>
                                        <td><?php echo $trapial_posts->getUpdator(); ?></td>
                                        <td><?php echo link_to('Borrar', 'posts/delete?id='.$trapial_posts->getId(), array('method' => 'delete', 'confirm' => '¿Estas seguro?', 'class'=> 'ico del')) ?><a href="<?php echo url_for('posts/edit?id='.$trapial_posts->getId()) ?>" class="ico edit">Editar</a></td>
                                </tr>
                                <?php $count++; ?>
                    <?php endforeach; ?>
                        </table>


                        <!-- Pagging -->
                        <div class="pagging">
                                <div class="left"><?php echo $count; ?> Noticias</div>
                        </div>
                        <!-- End Pagging -->
                </div>
                <!-- Table -->
        </div>
        <!-- End Box -->

</div>
<!-- End Content -->

        <!-- Sidebar -->
<div id="sidebar">

        <!-- Box -->
        <div class="box">

                <!-- Box Head -->
                <div class="box-head">
                        <h2>Opciones</h2>
                </div>
                <!-- End Box Head-->

                <div class="box-content">
                        <a href="<?php echo url_for('posts/new') ?>" class="add-button"><span>Agregar Noticia</span></a>
                        <div class="cl">&nbsp;</div>

                        <!--<p class="select-all"><input type="checkbox" class="checkbox" /><label>Seleccionar Todas</label></p>-->
                        <!--<p><a href="#">Eliminar seleccionados</a></p>-->

                </div>
        </div>
        <!-- End Box -->
</div>
<!-- End Sidebar -->
