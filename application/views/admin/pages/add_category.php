<!-- start: Content -->
<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo base_url('dashboard')?>">Home</a>
            <i class="icon-angle-right"></i> 
        </li>
        <li>
            <i class="icon-edit"></i>
            <a href="<?php echo base_url('add/category')?>">Add Category</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Category</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message');?></p>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="<?php echo base_url('save/category');?>" method="post" enctype="multipart/form-data">
                    <fieldset>

                        <div class="control-group">
                            <label class="control-label" for="fileInput">Category Url Name (Show In URl)</label>
                            <div class="controls">
                                <input class="span6 typeahead" id="category_url_name" placeholder"asdff" name="category_url_name" type="text"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Category Name</label>
                            <div class="controls">
                                <input class="span6 typeahead" id="category_name" placeholder"asdff" name="category_name" type="text"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Category Background Color</label>
                            <div class="controls">
                                 <input type="color" id="favcolor" name="bgcolor" style="height: 94px; width: 152px;">
                            </div>
                        </div> 
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Category Image (155 * 155)</label>
                            <div class="controls">
                                 <input type="file" id="favcolor" name="cat_image" style="height: 94px; width: 152px;">
                            </div>
                        </div>
                        
                        
                        <div class="control-group">
                            <label class="control-label" for="textarea2">Category Description</label>
                            <div class="controls">
                                <input class="span6 typeahead"" id="category_description" name="category_description" ></input>
                            </div>
                        </div>
                                
                        <div class="control-group">
                            <label class="control-label" for="textarea2">Publication Status</label>
                            <div class="controls">
                                <select name="publication_status">
                                    <option value="1">Published</option>
                                    <option value="0">UnPublished</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" id="save_category" class="btn btn-primary">Save changes</button>
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>   

            </div>
        </div><!--/span-->

    </div><!--/row-->

    
    
</div><!--/.fluid-container-->

<!-- end: Content -->