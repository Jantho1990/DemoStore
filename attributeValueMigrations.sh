#!/bin/sh

# Set up the migration commands for attribute values so we don't have to do them all in the console. :P

# Create the models and their migrations
php artisan make:model AttributeStringValue --migration
php artisan make:model AttributeTextValue --migration
php artisan make:model AttributeLongtextValue --migration
php artisan make:model AttributeIntegerValue --migration
php artisan make:model AttributeIntegerunsignedValue --migration
php artisan make:model AttributeFloatValue --migration
php artisan make:model AttributeDoubleValue --migration
php artisan make:model AttributeBooleanValue --migration
php artisan make:model AttributeEnumValue --migration
php artisan make:model AttributeIncrementValue --migration
php artisan make:model AttributeDateValue --migration
php artisan make:model AttributeTimeValue --migration
php artisan make:model AttributeDatetimeValue --migration

# Make all the pivot tables back to Attribute
php artisan make:migration create_attributes_attribute_string_values_table --create=attributes_attribute_string_values
php artisan make:migration create_attributes_attribute_text_values_table --create=attributes_attribute_text_values
php artisan make:migration create_attributes_attribute_longtext_values_table --create=attributes_attribute_longtext_values
php artisan make:migration create_attributes_attribute_integer_values_table --create=attributes_attribute_integer_values
php artisan make:migration create_attributes_attribute_integerunsigned_values_table --create=attributes_attribute_integerunsigned_values
php artisan make:migration create_attributes_attribute_float_values_table --create=attributes_attribute_float_values
php artisan make:migration create_attributes_attribute_double_values_table --create=attributes_attribute_double_values
php artisan make:migration create_attributes_attribute_boolean_values_table --create=attributes_attribute_boolean_values
php artisan make:migration create_attributes_attribute_enum_values_table --create=attributes_attribute_enum_values
php artisan make:migration create_attributes_attribute_increment_values_table --create=attributes_attribute_increment_values
php artisan make:migration create_attributes_attribute_date_values_table --create=attributes_attribute_date_values
php artisan make:migration create_attributes_attribute_time_values_table --create=attributes_attribute_time_values
php artisan make:migration create_attributes_attribute_datetime_values_table --create=attributes_attribute_datetime_values