# Blog con Jetstream

Esto es un blog en el que practico el paquete Jetstream y todas las relaciones posibles en la base de datos que permite Eloquent.

## BBDD

Las tablas y sus relaciones a continuación

- users
- profiles -> relación 1:1 con users 
- adresses -> relación 1:1 con users
- categorias
- posts -> relación 1:muchos con users Y -> -> relación 1:muchos con categorias
- videos -> relación 1:muchos con users
- roles
- role_user -> tabla pivote relación muchos:muchos roles y users
- permisos
- permiso_role -> tabla pivote relación muchos:muchos permisos y roles
- images -> relación polimórfica 1:1 con el módelo al que pertenezca (en el ejemplo es o user o post).
- comments -> relación polimórfica 1:muchos con el módelo al que pertenezca Y relación 1:muchos con users.
- tags
- taggables -> relación muchos:muchos polimórfica

## Tecnologías

- Laravel 9 / Jetstream
- AlpineJs
