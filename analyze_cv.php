<?php

// Function to calculate the size score based on word count
function calculateSizeScore($cvText) {
    $wordCount = str_word_count($cvText);
    return min($wordCount / 60, 5); // Adjusted threshold from 200 to 60
}

// Function to calculate the keyword score
function calculateKeywordScore($cvText) {
    // Define keywords to search for
    $keywords = ['experiência', 'competências', 'formação', 'trabalho', 'educação', 'idioma', 'idiomas', 'voluntariado',
    'habilidades', 'qualificações', 'realizações', 'projetos', 'cursos', 'certificações', 'objetivo', 'metas',
    'perfil', 'competências técnicas', 'competências comportamentais', 'interesses', 'aptidões', 'conhecimentos',
    'histórico profissional', 'referências', 'carta de apresentação', 'perfil profissional', 'resumo', 'portfólio',
    'entrevista', 'aperfeiçoamento', 'desenvolvimento pessoal', 'redação', 'pontos fortes', 'pontos fracos',
    'expectativas', 'perspectivas', 'trajetória', 'destaque', 'objetivos profissionais', 'metodologia', 'estratégia',
    'aprendizado contínuo', 'experiência internacional', 'trabalho voluntário', 'autodidata', 'apresentação pessoal',
    'ética profissional', 'liderança', 'trabalho em equipe', 'criatividade', 'inovação', 'resiliência', 'adaptabilidade',
    'solução de problemas', 'tomada de decisão', 'gestão do tempo', 'organização', 'comunicação', 'negociação',
    'networking', 'relacionamento interpessoal', 'trabalho sob pressão', 'multitarefa', 'flexibilidade', 'empatia',
    'confiança', 'autoconfiança', 'autoconhecimento', 'autocontrole', 'planejamento', 'gestão de projetos',
    'gestão de conflitos', 'feedback', 'estruturação', 'priorização', 'foco', 'eficiência', 'eficácia',
    'adaptabilidade', 'resolução de conflitos', 'tomada de decisões', 'gestão de equipe', 'criatividade', 'inovação',
    'aprendizado contínuo', 'autodidata', 'planejamento estratégico', 'comunicação assertiva', 'liderança de equipe',
    'resolução de problemas', 'trabalho em equipe', 'gestão do tempo', 'organização', 'liderança situacional',
    'resiliência', 'adaptabilidade', 'autogestão', 'gestão de mudanças', 'pensamento crítico', 'tomada de decisões',
    'gestão de projetos', 'orientação para resultados', 'empatia', 'iniciativa', 'flexibilidade', 'liderança transformacional',
    'gestão de conflitos', 'relacionamento interpessoal', 'foco no cliente', 'ética', 'proatividade', 'integridade',
    'criatividade', 'gestão de equipe remota', 'trabalho remoto', 'tecnologia da informação', 'transformação digital',
    'inovação tecnológica', 'análise de dados', 'machine learning', 'inteligência artificial', 'big data', 'analytics',
    'cloud computing', 'segurança da informação', 'desenvolvimento web', 'desenvolvimento mobile', 'UX/UI design',
    'redes sociais', 'marketing digital', 'e-commerce', 'gestão de sistemas', 'infraestrutura de TI', 'administração de banco de dados',
    'automação de processos', 'indústria 4.0', 'IoT', 'realidade virtual', 'realidade aumentada', 'blockchain',
    'cibersegurança', 'programação', 'linguagens de programação', 'front-end', 'back-end', 'full-stack', 'frameworks',
    'linguagens de marcação', 'linguagens de estilo', 'linguagens de consulta', 'SEO', 'SEM', 'wordpress', 'php', 'java',
    'python', 'javascript', 'html', 'css', 'sql', 'c++', 'c#', 'ruby', 'swift', 'objective-c', 'typescript', 'angular',
    'react', 'vue', 'laravel', 'django', 'spring', 'bootstrap', 'jquery', 'node.js', 'express', 'mongodb', 'mysql',
    'postgresql', 'oracle', 'git', 'docker', 'kubernetes', 'aws', 'azure', 'google cloud', 'linux', 'unix', 'windows',
    'macos', 'android', 'ios', 'api', 'rest', 'soap', 'microservices', 'agile', 'scrum', 'kanban', 'lean', 'devops',
    'continuous integration', 'continuous deployment', 'jenkins', 'ansible', 'terraform', 'bash', 'shell scripting',
    'machine learning', 'deep learning', 'neural networks', 'data science', 'data analysis', 'data visualization',
    'statistics', 'mathematics', 'algorithms', 'computer vision', 'natural language processing', 'reinforcement learning','supervised learning', 'unsupervised learning', 'classification', 'regression', 'clustering', 'dimensionality reduction',
'feature extraction', 'model evaluation', 'overfitting', 'underfitting', 'cross-validation', 'bias-variance tradeoff',
'ensemble learning', 'decision trees', 'random forests', 'support vector machines', 'k-nearest neighbors', 'naive bayes',
'neural networks', 'deep learning', 'convolutional neural networks', 'recurrent neural networks', 'autoencoders', 'GANs',
'reinforcement learning', 'Q-learning', 'policy gradients', 'actor-critic', 'value iteration', 'Markov decision processes',
'game theory', 'multi-armed bandits', 'exploration-exploitation tradeoff', 'temporal difference learning', 'Bellman equations',
'optimization', 'gradient descent', 'stochastic gradient descent', 'mini-batch gradient descent', 'momentum', 'Adam',
'learning rate scheduling', 'batch normalization', 'dropout', 'weight decay', 'data preprocessing', 'feature scaling',
'feature engineering', 'one-hot encoding', 'missing value imputation', 'dimensionality reduction techniques',
'principal component analysis', 't-SNE', 'LDA', 'NMF', 'word embeddings', 'Bag-of-Words', 'TF-IDF', 'tokenization',
'stemming', 'lemmatization', 'word2vec', 'GloVe', 'BERT', 'ELMo', 'U-Net', 'VGG16', 'ResNet', 'Inception', 'Xception',
'pre-trained models', 'transfer learning', 'fine-tuning', 'image augmentation', 'batch normalization', 'dropout',
'early stopping', 'model checkpointing', 'hyperparameter tuning', 'grid search', 'random search', 'Bayesian optimization',
'ensemble methods', 'bagging', 'boosting', 'stacking', 'XGBoost', 'LightGBM', 'CatBoost', 'scikit-learn', 'Keras', 'TensorFlow',
'PyTorch', 'fastai', 'OpenCV', 'NLTK', 'SpaCy', 'Gensim', 'Pandas', 'NumPy', 'SciPy', 'Matplotlib', 'Seaborn', 'Plotly',
'Bokeh', 'Scikit-image', 'Dask', 'Jupyter Notebook', 'Google Colab', 'AWS SageMaker', 'Azure Machine Learning',
'Kubeflow', 'MLflow', 'Apache Spark', 'Hadoop', 'Hive', 'HBase', 'Cassandra', 'Elasticsearch', 'Kibana', 'Logstash',
'Flask', 'Django Rest Framework', 'FastAPI', 'Pyramid', 'Falcon', 'Tornado', 'Celery', 'RabbitMQ', 'Redis', 'MongoDB',
'CouchDB', 'MySQL', 'SQLite', 'PostgreSQL', 'SQLAlchemy', 'Docker', 'Kubernetes', 'Terraform', 'Vagrant', 'Puppet',
'Chef', 'Ansible', 'Jenkins', 'CircleCI', 'Travis CI', 'GitLab CI/CD', 'GitHub Actions', 'Azure DevOps', 'CodeBuild',
'CodePipeline', 'Google Cloud Build', 'Amazon ECS', 'Google Kubernetes Engine', 'Azure Kubernetes Service', 'Heroku',
'AWS Lambda', 'Google Cloud Functions', 'Azure Functions', 'RESTful APIs', 'GraphQL', 'SOAP', 'JSON', 'XML', 'YAML',
'CSV', 'protobuf', 'Avro', 'Parquet', 'Apache Kafka', 'RabbitMQ', 'ZeroMQ', 'MQTT', 'Apache ActiveMQ', 'NATS', 'Redis',
'Memcached', 'Elasticsearch', 'Logstash', 'Kibana', 'Filebeat', 'Packetbeat', 'Metricbeat', 'Beats', 'Prometheus',
'Grafana', 'Nagios', 'Zabbix', 'Splunk', 'ELK Stack', 'Fluentd', 'Sumo Logic', 'New Relic', 'Datadog', 'AWS CloudWatch',
'Google Cloud Monitoring', 'Azure Monitor', 'Firebase', 'Google Analytics', 'Matomo', 'Piwik', 'Heap', 'Kissmetrics',
'Hotjar', 'Crazy Egg', 'Mixpanel', 'Segment', 'Amplitude', 'Google Tag Manager', 'Tealium', 'Adobe Analytics', 'Splunk',
'SAS', 'Tableau', 'Power BI', 'Looker', 'Domo', 'Qlik', 'MicroStrategy', 'Sisense', 'Alteryx', 'Informatica', 'Talend',
'Pentaho', 'Oracle Data Integrator', 'IBM InfoSphere', 'Azure Data Factory', 'Google Cloud Dataflow', 'Apache NiFi',
'AWS Glue', 'Tibco', 'Apache Kafka', 'Amazon Kinesis', 'Google Cloud Pub/Sub', 'Azure Event Hubs', 'Apache Pulsar',
'SQS', 'Azure Service Bus', 'RabbitMQ', 'IBM MQ', 'JMS', 'HDFS', 'S3', 'Google Cloud Storage', 'Azure Blob Storage',
'NFS', 'GlusterFS', 'Ceph', 'DRBD', 'ZFS', 'RAID', 'AWS S3 Glacier', 'Azure Storage Cool', 'Azure Storage Archive',
'Google Cloud Storage Nearline', 'Google Cloud Storage Coldline', 'Redis', 'Memcached', 'Cassandra', 'Couchbase',
'Amazon DynamoDB', 'Google Cloud Bigtable', 'Azure Cosmos DB', 'Apache Cassandra', 'MongoDB', 'MySQL', 'PostgreSQL',
'Microsoft SQL Server', 'Oracle Database', 'Amazon RDS', 'Amazon Aurora', 'Google Cloud SQL', 'Azure SQL Database',
'SAP HANA', 'DB2', 'SQLite', 'MariaDB', 'CockroachDB', 'Citus', 'InfluxDB', 'Elasticsearch', 'Prometheus', 'Grafana',
'Kibana', 'Fluentd', 'Logstash', 'Zipkin', 'Jaeger', 'OpenTracing', 'AWS X-Ray', 'Google Cloud Trace', 'Azure Monitor',
'Datadog', 'New Relic', 'AppDynamics', 'Splunk', 'Sumo Logic', 'Loggly', 'Papertrail', 'Graylog', 'LogDNA', 'LogRocket',
'Rollbar', 'Sentry', 'Bugsnag', 'Airbrake', 'Raygun', 'Honeybadger', 'OverOps', 'Instana', 'Wavefront', 'Dynatrace',
'SolarWinds', 'AppNeta', 'Zabbix', 'Nagios', 'Prometheus', 'Grafana', 'Datadog', 'New Relic', 'Dynatrace', 'Stackdriver',
'Azure Monitor', 'AWS CloudWatch', 'Splunk', 'Loggly', 'Logstash', 'Kibana', 'Graylog', 'Papertrail', 'LogRocket', 'Sentry',
'Rollbar', 'Bugsnag', 'Airbrake', 'Raygun', 'Honeybadger', 'Instana', 'Wavefront', 'AppDynamics', 'Dynatrace', 'SolarWinds',
'SmartBear', 'Micro Focus', 'IBM', 'CA Technologies', 'Splunk', 'Sumo Logic', 'DataDog', 'Rapid7', 'LogRhythm', 'LogZilla',
'Graylog', 'Papertrail', 'Loggly', 'Humio', 'Sentry', 'Raygun', 'Bugsnag', 'Airbrake', 'Rollbar', 'OverOps', 'Instana',
'Wavefront', 'AppDynamics', 'New Relic', 'Dynatrace', 'Zabbix', 'Nagios', 'Icinga', 'Prometheus', 'Grafana', 'Datadog',
'SolarWinds', 'Stackdriver', 'Azure Monitor', 'AWS CloudWatch', 'Splunk', 'Loggly', 'Logstash', 'Kibana', 'Graylog',
'Papertrail', 'LogRocket', 'Sentry', 'Rollbar', 'Bugsnag', 'Airbrake', 'Raygun', 'Honeybadger', 'Instana', 'Wavefront',
'AppDynamics', 'Dynatrace', 'SolarWinds', 'SmartBear', 'Micro Focus', 'IBM', 'CA Technologies', 'Splunk', 'Sumo Logic',
'DataDog', 'Rapid7', 'LogRhythm', 'LogZilla', 'Graylog', 'Papertrail', 'Loggly', 'Humio', 'Sentry', 'Raygun', 'Bugsnag',
'Airbrake', 'Rollbar', 'OverOps', 'Instana', 'Wavefront', 'AppDynamics', 'New Relic', 'Dynatrace', 'Zabbix', 'Nagios',
'Icinga', 'Prometheus', 'Grafana', 'Datadog', 'SolarWinds', 'Stackdriver', 'Azure Monitor', 'AWS CloudWatch', 'experiência', 'competências', 'formação', 'trabalho', 'educação', 'idioma', 'idiomas', 'voluntariado',
    'habilidades', 'qualificações', 'realizações', 'projetos', 'cursos', 'certificações', 'objetivo', 'metas',
    'perfil', 'competências técnicas', 'competências comportamentais', 'interesses', 'aptidões', 'conhecimentos',
    'histórico profissional', 'referências', 'carta de apresentação', 'perfil profissional', 'resumo', 'portfólio',
    'entrevista', 'aperfeiçoamento', 'desenvolvimento pessoal', 'redação', 'pontos fortes', 'pontos fracos',
    'expectativas', 'perspectivas', 'trajetória', 'destaque', 'objetivos profissionais', 'metodologia', 'estratégia',
    'aprendizado contínuo', 'experiência internacional', 'trabalho voluntário', 'autodidata', 'apresentação pessoal',
    'ética profissional', 'liderança', 'trabalho em equipe', 'criatividade', 'inovação', 'resiliência', 'adaptabilidade',
    'solução de problemas', 'tomada de decisão', 'gestão do tempo', 'organização', 'comunicação', 'negociação',
    'networking', 'relacionamento interpessoal', 'trabalho sob pressão', 'multitarefa', 'flexibilidade', 'empatia',
    'confiança', 'autoconfiança', 'autoconhecimento', 'autocontrole', 'planejamento', 'gestão de projetos',
    'gestão de conflitos', 'feedback', 'estruturação', 'priorização', 'foco', 'eficiência', 'eficácia',
    'adaptabilidade', 'resolução de conflitos', 'tomada de decisões', 'gestão de equipe', 'criatividade', 'inovação',
    'aprendizado contínuo', 'autodidata', 'planejamento estratégico', 'comunicação assertiva', 'liderança de equipe',
    'resolução de problemas', 'trabalho em equipe', 'gestão do tempo', 'organização', 'liderança situacional',
    'resiliência', 'adaptabilidade', 'autogestão', 'gestão de mudanças', 'pensamento crítico', 'tomada de decisões',
    'gestão de projetos', 'orientação para resultados', 'empatia', 'iniciativa', 'flexibilidade', 'liderança transformacional',
    'gestão de conflitos', 'relacionamento interpessoal', 'foco no cliente', 'ética', 'proatividade', 'integridade',
    'criatividade', 'gestão de equipe remota', 'trabalho remoto', 'tecnologia da informação', 'transformação digital',
    'inovação tecnológica', 'análise de dados', 'machine learning', 'inteligência artificial', 'big data', 'analytics',
    'cloud computing', 'segurança da informação', 'desenvolvimento web', 'desenvolvimento mobile', 'UX/UI design',
    'redes sociais', 'marketing digital', 'e-commerce', 'gestão de sistemas', 'infraestrutura de TI', 'administração de banco de dados',
    'automação de processos', 'indústria 4.0', 'IoT', 'realidade virtual', 'realidade aumentada', 'blockchain',
    'cibersegurança', 'programação', 'linguagens de programação', 'front-end', 'back-end', 'full-stack', 'frameworks',
    'linguagens de marcação', 'linguagens de estilo', 'linguagens de consulta', 'SEO', 'SEM', 'wordpress', 'php', 'java',
    'python', 'javascript', 'html', 'css', 'sql', 'c++', 'c#', 'ruby', 'swift', 'objective-c', 'typescript', 'angular',
    'react', 'vue', 'laravel', 'django', 'spring', 'bootstrap', 'jquery', 'node.js', 'express', 'mongodb', 'mysql',
    'postgresql', 'oracle', 'git', 'docker', 'kubernetes', 'aws', 'azure', 'google cloud', 'linux', 'unix', 'windows',
    'macos', 'android', 'ios', 'api', 'rest', 'soap', 'microservices', 'agile', 'scrum', 'kanban', 'lean', 'devops',
    'continuous integration', 'continuous deployment', 'jenkins', 'ansible', 'terraform', 'bash', 'shell scripting',
    'machine learning', 'deep learning', 'neural networks', 'data science', 'data analysis', 'data visualization',
    'statistics', 'mathematics', 'algorithms', 'computer vision', 'natural language processing', 'reinforcement learning','supervised learning', 'unsupervised learning', 'classification', 'regression', 'clustering', 'dimensionality reduction',
'feature extraction', 'model evaluation', 'overfitting', 'underfitting', 'cross-validation', 'bias-variance tradeoff',
'ensemble learning', 'decision trees', 'random forests', 'support vector machines', 'k-nearest neighbors', 'naive bayes',
'neural networks', 'deep learning', 'convolutional neural networks', 'recurrent neural networks', 'autoencoders', 'GANs',
'reinforcement learning', 'Q-learning', 'policy gradients', 'actor-critic', 'value iteration', 'Markov decision processes',
'game theory', 'multi-armed bandits', 'exploration-exploitation tradeoff', 'temporal difference learning', 'Bellman equations',
'optimization', 'gradient descent', 'stochastic gradient descent', 'mini-batch gradient descent', 'momentum', 'Adam',
'learning rate scheduling', 'batch normalization', 'dropout', 'weight decay', 'data preprocessing', 'feature scaling',
'feature engineering', 'one-hot encoding', 'missing value imputation', 'dimensionality reduction techniques',
'principal component analysis', 't-SNE', 'LDA', 'NMF', 'word embeddings', 'Bag-of-Words', 'TF-IDF', 'tokenization',
'stemming', 'lemmatization', 'word2vec', 'GloVe', 'BERT', 'ELMo', 'U-Net', 'VGG16', 'ResNet', 'Inception', 'Xception',
'pre-trained models', 'transfer learning', 'fine-tuning', 'image augmentation', 'batch normalization', 'dropout',
'early stopping', 'model checkpointing', 'hyperparameter tuning', 'grid search', 'random search', 'Bayesian optimization',
'ensemble methods', 'bagging', 'boosting', 'stacking',];


    // Initialize score
    $score = 0;

    // Count occurrences of keywords in CV text
    foreach ($keywords as $keyword) {
        $score += substr_count(strtolower($cvText), strtolower($keyword));
    }

    // If more than 10 keywords are found, assign a score of 5
    if ($score > 10) {
        return 5;
    }

    // Cap score at 5
    return min($score, 5);
}

// Retrieve CV text from the form submission
$cvText = $_POST['cvText'];

// Calculate scores
$sizeScore = calculateSizeScore($cvText);
$keywordScore = calculateKeywordScore($cvText);

// Calculate average score
$averageScore = ($sizeScore + $keywordScore) / 2;
// Redirect to result page with scores as URL parameters
header("Location: result.php?sizeScore=$sizeScore&keywordScore=$keywordScore&averageScore=$averageScore");
exit();

?>