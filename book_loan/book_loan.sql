CREATE TABLE `books` (
  `book_id` INT,
  `title` VARCHAR(255),
  `authors` VARCHAR(255),
  PRIMARY KEY (`book_id`)
);

CREATE TABLE `users` (
  `user_id` INT,
  `first_name` VARCHAR(255),
  `last_name` VARCHAR(255),
  `email` VARCHAR(255),
  `password` VARCHAR(32),
  PRIMARY KEY (`user_id`)
);

CREATE TABLE `checkouts` (
  `checkout_id` INT,
  `book_id` INT,
  `user_id` INT,
  `checkout_date` DATETIME,
  `due_date` DATETIME,
  `actual_return_date` DATETIME,
  `return_condition` VARCHAR(255),
  PRIMARY KEY (`checkout_id`),
  FOREIGN KEY (`checkout_date`)
      REFERENCES `books`(`book_id`),
  FOREIGN KEY (`user_id`)
      REFERENCES `users`(`user_id`)
);

CREATE TABLE `waitlists` (
  `waitlist_id` INT,
  `user_id` INT,
  `book_id` INT,
  `list_position` INT,
  `wait_terminated_date` DATETIME,
  PRIMARY KEY (`waitlist_id`),
  FOREIGN KEY (`book_id`)
      REFERENCES `books`(`book_id`),
  FOREIGN KEY (`user_id`)
      REFERENCES `users`(`user_id`)
);

