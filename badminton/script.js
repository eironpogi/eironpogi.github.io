const participants = [
    "Pam", "Eiron", "Xam", "Ian", "Jm", "Xian", "Peru", "Malone",
    "Bry", "Em", "Maxell", "Aira", "Cadiz", "Neil", "Tiff", "Isay",
    "Peru +1", "Maxell +1"
];

function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}

function generateTeams() {
    shuffle(participants);
    const teams = [];
    for (let i = 0; i < participants.length; i += 2) {
        teams.push(`${participants[i]} and ${participants[i + 1]}`);
    }
    displayTeams(teams);
    generateBracket(teams);
}

function displayTeams(teams) {
    const teamsDiv = document.getElementById('teams');
    teamsDiv.innerHTML = '<h2>Teams</h2>';
    teams.forEach((team, index) => {
        teamsDiv.innerHTML += `<div class="team">Team ${index + 1}: ${team}</div>`;
    });
}

function generateBracket(teams) {
    const bracketContainer = document.getElementById('bracket-container');
    bracketContainer.innerHTML = '';

    // Initial round
    let matchups = teams.map((team, index) => ({
        team1: team,
        team2: teams[index + 1] || 'Bye'
    })).filter((_, index) => index % 2 === 0);

    let roundNumber = 1;
    while (matchups.length > 1 || roundNumber === 1) {
        const round = document.createElement('div');
        round.classList.add('round');
        round.innerHTML = `<h2>Round ${roundNumber}</h2>`;

        matchups.forEach(matchup => {
            const matchupDiv = document.createElement('div');
            matchupDiv.classList.add('matchup');
            matchupDiv.innerHTML = `<div>${matchup.team1}</div><div class="connector"></div><div>${matchup.team2}</div>`;
            round.appendChild(matchupDiv);
        });

        bracketContainer.appendChild(round);

        matchups = matchups.map((_, index) => ({
            team1: `Winner of Match ${index * 2 + 1}`,
            team2: `Winner of Match ${index * 2 + 2}`
        })).filter((_, index) => index % 2 === 0);

        roundNumber++;
    }

    // Final round
    const finalRound = document.createElement('div');
    finalRound.classList.add('round');
    finalRound.innerHTML = '<h2>Final</h2>';
    const finalMatchup = document.createElement('div');
    finalMatchup.classList.add('matchup');
    finalMatchup.innerHTML = `<div>Winner of Match ${roundNumber * 2 - 2}</div><div class="connector"></div><div>Winner of Match ${roundNumber * 2 - 1}</div>`;
    finalRound.appendChild(finalMatchup);
    bracketContainer.appendChild(finalRound);
}
