<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Owntweet</title>
    <!-- Tailwind CSS CDN -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/3.4.1/tailwind.min.css" rel="stylesheet">
     <script defer src="https://cdn.tailwindcss.com"></script>    
     <!-- Boxicons CDN -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <!-- Google Fonts CDN -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --neon-cyan: #00f3ff;
            --neon-purple: #bc13fe;
        }

        body {
            background: radial-gradient(circle at center, #0a0a2e 0%, #000 100%);
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
        }

        .project-card {
            background: rgba(16, 16, 48, 0.6);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .project-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, var(--neon-cyan), var(--neon-purple), transparent);
            transform: rotate(-45deg);
            opacity: 0;
            transition: opacity 0.5s;
        }

        .project-card:hover {
            transform: translateY(-8px) rotate3d(0.5, -0.5, 0, 10deg);
            box-shadow: 0 0 40px rgba(188, 19, 254, 0.2);
        }

        .project-card:hover::before {
            opacity: 0.3;
        }

        .gradient-text {
            background: linear-gradient(45deg, var(--neon-cyan), var(--neon-purple));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .tag-pill {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .tag-pill:hover {
            background: rgba(188, 19, 254, 0.2);
            border-color: var(--neon-purple);
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .animate-float {
            animation: float 4s ease-in-out infinite;
        }
    </style>
</head>
<body class="text-gray-100">
    <div class="container mx-auto py-16 px-4 md:px-8">
        <h1 class="text-5xl font-bold text-center mb-16 gradient-text animate-float">
            PROJECT LIST, BUILD WITH AI
        </h1>

       <div id="project-list" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
            <!-- Project Cards -->
           <?php
                require 'projects_data.php';
                 foreach ($projects as $project):
             ?>
                 <div class="project-card rounded-xl p-8 relative">
                      <div class="absolute inset-0 bg-noise opacity-10 pointer-events-none"></div>
                        <div class="relative z-10">
                            <h2 class="text-2xl font-bold mb-4"><?= htmlspecialchars($project['title']) ?></h2>
                             <p class="text-gray-300 mb-6 leading-relaxed"><?= htmlspecialchars($project['description']) ?></p>
                            <div class="flex flex-wrap gap-3 mb-8">
                                <?php foreach ($project['tags'] as $tag): ?>
                                    <span class="tag-pill px-4 py-2 rounded-full text-sm"><?= htmlspecialchars($tag) ?></span>
                                <?php endforeach; ?>
                            </div>
                             <div class="flex gap-4 text-2xl">
                                <a href="<?= htmlspecialchars($project['githubUrl']) ?>" target="_blank" class="text-gray-400 hover:text-cyan-400 transition-colors" title="Github">
                                  <i class='bx bxl-github'></i>
                               </a>
                                <?php if ($project['liveUrl'] && $project['liveUrlType'] == 'website'): ?>
                                    <a href="<?= htmlspecialchars($project['liveUrl']) ?>" target="_blank"  class="text-gray-400 hover:text-purple-400 transition-colors" title="Live Demo">
                                        <i class='bx bx-link-external'></i>
                                    </a>
                                 <?php elseif($project['liveUrl'] && $project['liveUrlType'] == 'github'): ?>
                                       <a href="<?= htmlspecialchars($project['liveUrl']) ?>" target="_blank"  class="text-gray-400 hover:text-purple-400 transition-colors" title="Github">
                                           <i class='bx bxl-github'></i>
                                       </a>
                                <?php endif; ?>
                                <?php if ($project['websiteUrl']): ?>
                                      <a href="<?= htmlspecialchars($project['websiteUrl']) ?>" target="_blank" class="text-gray-400 hover:text-purple-400 transition-colors" title="Website">
                                           <i class='bx bx-world'></i>
                                       </a>
                                <?php endif; ?>
                             </div>
                         </div>
                 </div>
             <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
