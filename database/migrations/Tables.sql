ALTER TABLE `climber`.`students`   
  ADD COLUMN `class_id` BIGINT(20) NULL AFTER `updated_at`;

CREATE TABLE `climber`.`activities`(  
  `activitie_id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100),
  `description` VARCHAR(65535),
  `start_date` DATETIME,
  `end_date` DATETIME,
  `type` CHAR(1),
  `max_students` BIGINT(20),
  `percentage_note_integral` VARCHAR(50),
  `file` VARCHAR(150),
  `generate_random_group` CHAR(1),
  `integral_note_weight` VARCHAR(10),
  `id_class` BIGINT(20),
  `teacher_discipline_id` BIGINT(20),
  `status` CHAR(1),
  PRIMARY KEY (`activitie_id`)
);

CREATE TABLE `climber`.`course`(  
  `course_id` BIGINT(20) NOT NULL,
  `description` VARCHAR(150),
  PRIMARY KEY (`course_id`)
);

CREATE TABLE `climber`.`evaluation`(  
  `evaluation_id` BIGINT(20) NOT NULL,
  `leadership_points` FLOAT(20),
  `skill_points` FLOAT(20),
  `dedication_points` FLOAT(20),
  `collaboration_points` FLOAT(20),
  `evaluating_student_id` BIGINT(20),
  `student_rated_id` BIGINT(20),
  `teacher_id` BIGINT(20),
  `activitie_id` BIGINT(20),
  `note` FLOAT(20),
  PRIMARY KEY (`evaluation_id`)
);

CREATE TABLE `climber`.`feedbackactivie`(  
  `feedbackactivie_id` BIGINT(20) NOT NULL,
  `description` VARCHAR(250),
  `student_id` BIGINT(20),
  `activie_id` BIGINT(20),
  PRIMARY KEY (`feedbackactivie_id`)
);

CREATE TABLE `climber`.`historic_activity`(  
  `historic_activity_id` BIGINT(20),
  `description` VARCHAR(250),
  `status` CHAR(1),
  `resolved_student_id` BIGINT(20),
  `resolved_date` DATETIME,
  `activitie_id` BIGINT(20)
);

ALTER TABLE `climber`.`activities`   
  ADD COLUMN `discipline` VARCHAR(100) NULL AFTER `status`;
