##hit url $url/db.php to create db and tables
### hit $url/import.php for csv importer form

#original_data

product_id	PK
product_code	var_char(50) not_null
product_label	var_char(255) not_null
gender	var_char(255)
migrated_data

product_id	PK
sku	var_char(50) not_null
name	var_char(255) not_null
image_url	var_char(255)
Using the data sample csv provided in this repository, and using PHP, create a script (pop-table.php) that populates the original_data table.

Write a second script (migrate.php) that takes the data from the original_data table, transforming the data and storing it in to the migrated_data table

When transforming the data, the following rules apply:

migrated_data.sku = original_data.product_code
original_data.product_label = migrated_data.name
When creating the sku in the migrated_data table add the gender as a suffix to the product_code seperated by an underscrore (_). Where gender is 'F', it should be converted to 'women' and 'M' will be converted to 'men'. By default, the value should be 'women'.