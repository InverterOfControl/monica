<?php

return [

    //index
    'people_list_number_kids' => '{0} 0 enfant |{1,1} 1 enfant|{2,*} :count enfants',
    'people_list_number_reminders' => '{0} 0 rappel |{1,1} 1 rappel |{2,*} :count rappels',
    'people_list_blank_title' => 'Vous n\'avez encore ajouté aucun contact.',
    'people_list_blank_cta' => 'Ajouter quelqu\'un',
    'people_list_search' => 'Rechercher quelqu\'un par son nom',
    'people_list_firstnameAZ' => 'Tri par prénom A → Z',
    'people_list_firstnameZA' => 'Tri par prénom Z → A',
    'people_list_lastnameAZ' => 'Tri par nom de famille A → Z',
    'people_list_lastnameZA' => 'Tri par nom de famille Z → A',

    // people add
    'people_add_title' => 'Ajouter une nouvelle personne',
    'people_add_firstname' => 'Prénom',
    'people_add_middlename' => 'Surnom (optionnel)',
    'people_add_lastname' => 'Nom de famille (optionnel)',
    'people_add_cta' => 'Ajouter cette personne',

    // show
    'section_personal_information' => 'Informations personnelles',
    'section_personal_activities' => 'Activités',
    'section_personal_reminders' => 'Rappels',
    'section_personal_tasks' => 'Tâches',
    'section_personal_gifts' => 'Cadeaux',

    //
    'link_to_list' => 'Retour à la liste',

    // age - birthday
    'birthdate_not_set' => 'Non indiqué.',
    'age_approximate_in_years' => 'env. :age ans',
    'age_exact_in_years' => ':age ans',
    'age_exact_birthdate' => 'né le :date',

    // Last called
    'last_called' => 'Dernier appel : :date',
    'last_called_empty' => 'Dernier appel : inconnu',
    'last_activity_date' => 'Dernière activité ensemble : :date',
    'last_activity_date_empty' => 'Dernière activité ensemble : inconnu',

    // additional information
    'information_edit_success' => 'Le profil a été mis à jour avec succès',
    'information_edit_title' => 'Mettre à jour les informations personnelles de :name',
    'information_edit_male' => 'Homme',
    'information_edit_female' => 'Femme',
    'information_edit_firstname' => 'Prénom',
    'information_edit_lastname' => 'Nom de famille (optionnel)',
    'information_edit_street' => 'Rue (optionnel)',
    'information_edit_province' => 'Province (optionnel)',
    'information_edit_postalcode' => 'Code postal (optionnel)',
    'information_edit_city' => 'Ville',
    'information_edit_country' => 'Pays',
    'information_edit_email' => 'Adresse courriel',
    'information_edit_phone' => 'Numéro de téléphone',
    'information_edit_probably' => 'Cette personne a probably',
    'information_edit_probably_yo' => 'ans',
    'information_edit_exact' => 'Je connais la date de naissance précise, qui est',
    'information_edit_help' => 'Si vous indiquez la date de naissance exacte de cette personne, nous allons créer un rappel pour vous - ainsi vous serez informé chaque année que c\'est le moment de célébrer son anniversaire.',
    'information_no_address_defined' => 'Aucune adresse définie',
    'information_no_email_defined' => 'Aucun courriel défini',
    'information_no_phone_defined' => 'Aucun numéro de téléphone défini',

    // food preferencies
    'food_preferencies_add_success' => 'Les préférences alimentaires ont été mises à jour.',
    'food_preferencies_edit_description' => 'Peut-être que :firstname ou quelqu\'un dans la famille :family a une allergie. Ou peut-être qu\'il n\'aime pas un vin spécifique. Indiquez ici ses préférences alimentaires afin que vous vous en rappeliez la prochaine fois que vous l\'inviterez à dîner.',
    'food_preferencies_edit_description_no_last_name' => 'Peut-être que :firstname a une allergie. Ou peut-être qu\'il n\'aime pas un vin spécifique. Indiquez ici ses préférences alimentaires afin que vous vous en rappeliez la prochaine fois que vous l\'inviterez à dîner.',
    'food_preferencies_edit_title' => 'Modification des préférences alimentaires',
    'food_preferencies_edit_cta' => 'Mettre à jour',
    'food_preferencies_title' => 'Préférences alimentaires',
    'food_preferencies_cta' => 'Ajouter',

    // reminders
    'reminders_blank_title' => 'De quoi souhaitez-vous être rappelé à propos de :name ?',
    'reminders_blank_add_activity' => 'Ajouter un rappel',
    'reminders_add_title' => 'De quoi souhaitez-vous être rappelé à propos de :name ?',
    'reminders_add_description' => 'Merci de me tenir informer de...',
    'reminders_add_predefined' => 'Rappel pré-défini',
    'reminders_add_custom' => 'Rappel personnalisé',
    'reminders_add_next_time' => 'Prochaine date de ce rappel',
    'reminders_add_once' => 'Rappelez-moi juste une fois',
    'reminders_add_recurrent' => 'Rappelez-moi tous les',
    'reminders_add_starting_from' => 'à compter de la date définie ci-après',
    'reminders_add_cta' => 'Ajouter le rappel',
    'reminders_add_error_custom_text' => 'Vous devez indiquer un texte pour ce rappel.',
    'reminders_create_success' => 'Le rappel a été ajouté avec succès.',
    'reminders_delete_success' => 'Le rappel a été supprimé avec succès.',
    'reminders_type_week' => 'semaine',
    'reminders_type_month' => 'mois',
    'reminders_type_year' => 'année',

    'reminder_frequency_week' => 'chaque semaine|chaque :number semaines',
    'reminder_frequency_month' => 'chaque mois|chaque :number mois',
    'reminder_frequency_year' => 'chaque année|chaque :number années',
    'reminder_frequency_one_time' => 'le :date',
    'reminders_delete_confirmation' => 'Êtes-vous sûr de vouloir supprimer ce rappel ?',
    'reminders_delete_cta' => 'Supprimer',
    'reminders_next_expected_date' => 'le',
    'reminders_cta' => 'Ajouter un rappel',
    'reminders_description' => 'Nous vous enverrons un courriel pour chacun des rappels ci-dessous. Les rappels sont envoyés le matin du jour où l\'évènement se passe.',

    // significant other
    'significant_other_sidebar_title' => 'Conjoint',
    'significant_other_cta' => 'Ajouter un conjoint',
    'significant_other_add_title' => 'Quel est le nom du conjoint de :name ?',
    'significant_other_add_male' => 'Homme',
    'significant_other_add_female' => 'Femme',
    'significant_other_add_firstname' => 'Nom',
    'significant_other_add_unknown' => 'Je ne connais pas son âge.',
    'significant_other_add_probably' => 'Cette personne a probablement',
    'significant_other_add_probably_yo' => 'ans',
    'significant_other_add_exact' => 'Je connais la date exacte de naissance de cette personne, qui est',
    'significant_other_add_help' => 'Si vous indiquez la date de naissance exacte de cette personne, nous allons créer un rappel pour vous - ainsi vous serez informé chaque année que c\'est le moment de célébrer son anniversaire.',
    'significant_other_add_cta' => 'Ajouter le conjoint',
    'significant_other_edit_cta' => 'Mettre à jour le conjoint',
    'significant_other_delete_confirmation' => 'Êtes-vous sûr de vouloir supprimer le conjoint ?',
    'significant_other_add_success' => 'Le conjoint a été ajouté avec succès.',
    'significant_other_edit_success' => 'Le conjoint a été mis à jour avec succès.',
    'significant_other_delete_success' => 'Le conjoint a été supprimé avec succès.',

    // kids
    'kids_sidebar_title' => 'Enfants',
    'kids_sidebar_cta' => 'Ajouter un autre enfant',
    'kids_blank_cta' => 'Ajouter un enfant',
    'kids_add_title' => 'Ajouter un enfant',
    'kids_add_boy' => 'Garçon',
    'kids_add_girl' => 'Fille',
    'kids_add_gender' => 'Sexe',
    'kids_add_firstname' => 'Prénom',
    'kids_add_firstname_help' => 'Nous supposons que le nom de famille est :name',
    'kids_add_probably' => 'Cet enfant a probablement',
    'kids_add_probably_yo' => 'ans',
    'kids_add_exact' => 'Je connais la date de naissance précise de cet enfant, qui est',
    'kids_add_help' => 'Si vous indiquez la date de naissance exacte de cette personne, nous allons créer un rappel pour vous - ainsi vous serez informé chaque année que c\'est le moment de célébrer son anniversaire.',
    'kids_add_cta' => 'Ajouter l\'enfant',
    'kids_edit_title' => 'Mettre à jour les informations de :name',
    'kids_delete_confirmation' => 'Êtes-vous sûr de vouloir supprimer cet enfant ?',
    'kids_add_success' => 'L\'enfant a été ajouté avec succès.',
    'kids_update_success' => 'L\'enfant a été mis à jour avec succès.',
    'kids_delete_success' => 'L\'enfant a été supprimé avec succès.',

    // tasks
    'tasks_desc' => 'Gardez une trace des choses à faire pour :name.',
    'tasks_blank_title' => 'Il semble que vous n\'ayez aucune tâche définie pour :name pour le moment.',
    'tasks_blank_add_activity' => 'Ajouter une tâche',
    'tasks_add_title_page' => 'Ajouter une nouvelle tâche pour :name',
    'tasks_add_title' => 'Quelle tâche souhaitez-vous ajouter ?',
    'tasks_add_optional_comment' => 'Commentaire (optionnel)',
    'tasks_add_cta' => 'Ajouter la tâche',
    'tasks_add_success' => 'La tâche a été ajoutée avec succès.',
    'tasks_delete' => 'Supprimer',
    'tasks_reactivate' => 'Réactivater',
    'tasks_mark_complete' => 'Marquer comme complètée',
    'tasks_add_task' => 'Ajouter une tâche',
    'tasks_added_on' => 'ajoutée le :date',
    'tasks_delete_confirmation' => 'Êtes-vous sûr de vouloir supprimer cette tâche ?',
    'tasks_delete_success' => 'La tâche a été supprimée avec succès.',
    'tasks_complete_success' => 'La tâche a été mise à jour avec succès.',

    // activities
    'activity_title' => 'Activités',
    'activity_description' => 'Gardez une trace de toutes les activités que vous avez eues avec :name ou sa famille.',
    'activity_type_group_simple_activities' => 'Activités simples',
    'activity_type_group_sport' => 'Sport',
    'activity_type_group_food' => 'Nourriture',
    'activity_type_group_cultural_activities' => 'Activités culturelles',
    'activity_type_just_hanged_out' => 'traîner ensemble',
    'activity_type_watched_movie_at_home' => 'regarder un film à la maison ensemble',
    'activity_type_talked_at_home' => 'parler ensemble à la maison',
    'activity_type_did_sport_activities_together' => 'fait du sport ensemble',
    'activity_type_ate_at_his_place' => 'manger chez lui',
    'activity_type_ate_at_her_place' => 'manger chez elle',
    'activity_type_went_bar' => 'aller dans un bar',
    'activity_type_ate_at_home' => 'manger à la maison',
    'activity_type_picknicked' => 'pique-niquer ensemble',
    'activity_type_went_theater' => 'aller au cinéma',
    'activity_type_went_concert' => 'aller à un concert',
    'activity_type_went_play' => 'aller au théâtre',
    'activity_type_went_museum' => 'aller au musée',
    'activity_type_ate_restaurant' => 'aller au restaurant',
    'activities_add_activity' => 'Ajouter activité',
    'activities_more_details' => 'Voir détails',
    'activities_hide_details' => 'Cacher les détails',
    'activities_delete_confirmation' => 'Etes-vous sûr de vouloir supprimer l\'activité ?',
    'activities_item_information' => ':Activity. S\'est passée le :date.',
    'activities_add_title' => 'Qu\'avez-vous fait avec :name?',
    'activities_add_pick_activity' => 'Choisissez une activité',
    'activities_add_date_occured' => 'Date où l\'activité s\'est passée',
    'activities_add_optional_comment' => 'Commentaire (optionnel)',
    'activities_add_cta' => 'Enregistrer l\'activité',
    'activities_blank_title' => 'Gardez une trace de ce que vous avez fait avec :name par le passé.',
    'activities_blank_add_activity' => 'Ajouter une activité',
    'activities_add_success' => ':L\'activité a été ajoutée avec succès.',
    'activities_update_success' => 'L\'activité a été mise à jour avec succès.',
    'activities_delete_success' => 'L\'activité a été supprimée avec succès.',

    // notes
    'notes_add_success' => 'La note a été ajoutée avec succès.',
    'notes_delete_success' => 'La note a été supprimée avec succès.',
    'notes_add_title' => 'Ajouter une note à propos de :name.',
    'notes_add_cta' => 'Ajouter la note',
    'notes_written_on' => 'Ecrit le :date',
    'notes_add_one_more' => 'Ajouter une autre note',
    'notes_title' => 'Notes',
    'notes_blank_link' => 'Ajouter une note',
    'notes_blank_name' => 'à propos de :name',

    // gifts
    'gifts_blank_title' => 'Gérez vos idées de cadeaux ou les cadeaux que vous avez offert à :name.',
    'gifts_blank_add_gift' => 'Ajouter un cadeau',
    'gifts_add_success' => 'Le cadeau a été ajouté avec succès.',
    'gifts_delete_success' => 'Le cadeau a été supprimé.',
    'gifts_delete_confirmation' => 'Etes-vous sûr de vouloir supprimer ce cadeau ?',
    'gifts_add_gift' => 'Ajouter un cadeau',
    'gifts_link' => 'Lien',
    'gifts_added_on' => 'Ajouté le :date',
    'gifts_delete_cta' => 'Supprimer',
    'gifts_offered' => 'offert',
    'gifts_add_title' => 'Gestion des cadeaux pour :name',
    'gifts_add_gift_idea' => 'Idée de cadeau',
    'gifts_add_gift_already_offered' => 'Cadeau déjà offert',
    'gifts_add_gift_title' => 'Quel est ce cadeau?',
    'gifts_add_link' => 'Lien de la page web (optionnel)',
    'gifts_add_value' => 'Valeur (optionnel)',
    'gifts_add_comment' => 'Commentaire (optionnel)',
    'gifts_add_someone' => 'Ce cadeau est destiné à quelqu\'un de la famille :name en particulier',
    'gifts_add_cta' => 'Ajouter',
    'gifts_gift_idea' => 'Idée de cadeau',

];