USE recipes_db;

SELECT recipe_name, recipe_image, recipe_time, recipe_category, re

FROM tb_recipes

LEFT JOIN tb_recipes_category

ON tb_recipes.recipe_category_id = tb_recipes_category.id_recipe_category
;
