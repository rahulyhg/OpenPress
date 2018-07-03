DROP TABLE IF EXISTS op_categories;
CREATE TABLE op_categories
(
  id              smallint unsigned NOT NULL auto_increment,
  name            varchar(255) NOT NULL,                      # Name of the category
  description     text NOT NULL,                              # A short description of the category
 
  PRIMARY KEY     (id)
);
DROP TABLE IF EXISTS articles;
CREATE TABLE articles
(
  id              smallint unsigned NOT NULL auto_increment,
  publicationDate date NOT NULL,     # When the article was published
  categoryId      smallint unsigned NOT NULL,                          
  title           varchar(255) NOT NULL,                      # Full title of the article
  summary         text NOT NULL,                              # A short summary of the article
  content         mediumtext NOT NULL,                        # The HTML content of the article

  PRIMARY KEY     (id)
);
