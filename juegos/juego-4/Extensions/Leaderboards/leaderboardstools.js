var gdjs;
(function (S) {
  const o = new S.Logger("Leaderboards");
  let G;
  (function (M) {
    let O;
    (function (i) {
      let P = !1;
      S.registerRuntimeScenePostEventsCallback(() => {
        P = !1;
      }),
        (i.hasPlayerJustClosedLeaderboardView = () => P);
      const U = (t) => {
        const e = new jsSHA("SHA-256", "TEXT", { encoding: "UTF8" });
        return e.update(t), e.getHash("B64");
      };
      class R {
        constructor() {
          this.lastScoreSavingStartedAt = null;
          this.lastScoreSavingSucceededAt = null;
          this.lastSavingPromise = null;
          this._currentlySavingScore = null;
          this._currentlySavingPlayerName = null;
          this._currentlySavingPlayerId = null;
          this._lastSavedScore = null;
          this._lastSavedPlayerName = null;
          this._lastSavedPlayerId = null;
          this.lastSavedLeaderboardEntryId = null;
          this.lastSaveError = null;
          this.hasScoreBeenSaved = !1;
          this.hasScoreSavingErrored = !1;
        }
        isSaving() {
          return (
            !!this.lastSavingPromise &&
            !this.hasScoreBeenSaved &&
            !this.hasScoreSavingErrored
          );
        }
        _isSameAsLastScore({ playerName: e, playerId: n, score: r }) {
          return (
            ((!!e && this._lastSavedPlayerName === e) ||
              (!!n && this._lastSavedPlayerId === n)) &&
            this._lastSavedScore === r
          );
        }
        _isAlreadySavingThisScore({ playerName: e, playerId: n, score: r }) {
          return this.isSaving()
            ? ((!!e && this._currentlySavingPlayerName === e) ||
                (!!n && this._currentlySavingPlayerId === n)) &&
                this._currentlySavingScore === r
            : !1;
        }
        _isTooSoonToSaveAnotherScore() {
          return (
            !!this.lastScoreSavingStartedAt &&
            Date.now() - this.lastScoreSavingStartedAt < 500
          );
        }
        startSaving({ playerName: e, playerId: n, score: r }) {
          if (
            this._isAlreadySavingThisScore({
              playerName: e,
              playerId: n,
              score: r,
            })
          )
            throw (
              (o.warn(
                "There is already a request to save with this player name and this score. Ignoring this one."
              ),
              new Error("Ignoring this saving request."))
            );
          if (this._isSameAsLastScore({ playerName: e, playerId: n, score: r }))
            throw (
              (o.warn(
                "The player and score to be sent are the same as previous one. Ignoring this one."
              ),
              this._setError("SAME_AS_PREVIOUS"),
              new Error("Ignoring this saving request."))
            );
          if (this._isTooSoonToSaveAnotherScore())
            throw (
              (o.warn(
                "Last entry was sent too little time ago. Ignoring this one."
              ),
              this._setError("TOO_FAST"),
              (this.lastScoreSavingStartedAt = Date.now()),
              new Error("Ignoring this saving request."))
            );
          let a;
          const d = new Promise((s) => {
            a = s;
          });
          return (
            (this.lastScoreSavingStartedAt = Date.now()),
            (this.lastSavingPromise = d),
            (this.hasScoreBeenSaved = !1),
            (this.hasScoreSavingErrored = !1),
            (this._currentlySavingScore = r),
            e && (this._currentlySavingPlayerName = e),
            n && (this._currentlySavingPlayerId = n),
            {
              closeSaving: (s) => {
                if (d !== this.lastSavingPromise) {
                  o.info(
                    "Score saving result received, but another save was launched in the meantime - ignoring the result of this one."
                  ),
                    a();
                  return;
                }
                (this.lastScoreSavingSucceededAt = Date.now()),
                  (this._lastSavedScore = this._currentlySavingScore),
                  (this._lastSavedPlayerName = this._currentlySavingPlayerName),
                  (this._lastSavedPlayerId = this._currentlySavingPlayerId),
                  (this.lastSavedLeaderboardEntryId = s),
                  (this.hasScoreBeenSaved = !0),
                  a();
              },
              closeSavingWithError: (s) => {
                if (d !== this.lastSavingPromise) {
                  o.info(
                    "Score saving result received, but another save was launched in the meantime - ignoring the result of this one."
                  ),
                    a();
                  return;
                }
                this._setError(s), a();
              },
            }
          );
        }
        _setError(e) {
          (this.lastSaveError = e),
            (this.hasScoreBeenSaved = !1),
            (this.hasScoreSavingErrored = !0);
        }
      }
      let l = {},
        I,
        c = null,
        D = !1,
        p = !1,
        f = !1,
        w = null,
        C = null;
      const u = document.createElement("div");
      (u.style.backgroundColor = "#000000"),
        (u.style.display = "flex"),
        (u.style.height = "100%"),
        (u.style.width = "100%"),
        (u.style.justifyContent = "center"),
        (u.style.alignItems = "center"),
        (u.style.position = "relative"),
        (u.style.zIndex = "2");
      const A = document.createElement("img");
      A.setAttribute("width", "50px"),
        A.setAttribute(
          "src",
          "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGZpbGw9Im5vbmUiIHZpZXdCb3g9IjAgMCAyNCAyNCI+CjxjaXJjbGUgb3BhY2l0eT0nMC4yNScgY3g9IjEyIiBjeT0iMTIiIHI9IjEwIiBzdHJva2U9IiNGRkZGRkYiIHN0cm9rZS13aWR0aD0iNCI+PC9jaXJjbGU+CjxwYXRoIG9wYWNpdHk9JzAuNzUnIGZpbGw9IiNGRkZGRkYiIGQ9Ik00IDEyYTggOCAwIDAxOC04VjBDNS4zNzMgMCAwIDUuMzczIDAgMTJoNHptMiA1LjI5MUE3Ljk2MiA3Ljk2MiAwIDAxNCAxMkgwYzAgMy4wNDIgMS4xMzUgNS44MjQgMyA3LjkzOGwzLTIuNjQ3eiI+PC9wYXRoPgo8L3N2Zz4="
        );
      try {
        A.animate(
          [{ transform: "rotate(0deg)" }, { transform: "rotate(359deg)" }],
          { duration: 3e3, iterations: 1 / 0 }
        );
      } catch {
        o.warn("Animation not supported, loader will be fixed.");
      }
      u.appendChild(A);
      const _ = function ({ hasSucceeded: t }) {
          const e = (a) =>
              t ? a.lastScoreSavingSucceededAt : a.lastScoreSavingStartedAt,
            n = Object.values(l).filter((a) => !!e(a));
          if (n.length === 0) return null;
          let r = n[0];
          return (
            n.forEach((a) => {
              const d = e(a),
                s = e(r);
              d && s && d > s && (r = a);
            }),
            r
          );
        },
        x = async function ({
          leaderboardId: t,
          playerName: e,
          authenticatedPlayerData: n,
          score: r,
          runtimeScene: a,
        }) {
          const s = `${
              a.getGame().isUsingGDevelopDevelopmentEnvironment()
                ? "https://api-dev.gdevelop.io"
                : "https://api.gdevelop.io"
            }/play`,
            g = a.getGame(),
            h = {
              score: r,
              sessionId: g.getSessionId(),
              clientPlayerId: g.getPlayerId(),
              location:
                typeof window != "undefined" && window.location
                  ? window.location.href
                  : "",
            },
            v = { "Content-Type": "application/json" };

          console.log(s);
          o.info("Saving score to leaderboard", t, "with data", s);
          window.localStorage.setItem("leaderboard", r);

          window.parent.postMessage(r, "*");

          let b = `${s}/game/${S.projectData.properties.projectUuid}/leaderboard/${t}/entry`;
          n
            ? ((v.Authorization = `player-game-token ${n.playerToken}`),
              (b += `?playerId=${n.playerId}`))
            : (h.playerName = i.formatPlayerName(e));
          const L = JSON.stringify(h);
          v.Digest = U(L);
          try {
            const y = await fetch(b, { body: L, method: "POST", headers: v });
            if (!y.ok) {
              console.log("Error", r);
              const E = y.status.toString();
              throw (o.error("Server responded with an error:", s, E), E);
            }
            let j = null;
            try {
              j = (await y.json()).id;
            } catch (E) {
              o.warn(
                "An error occurred when reading response but score has been saved:",
                E
              );
            }
            return j;
          } catch (y) {
            throw (
              (o.error("Error while submitting a leaderboard score:", y),
              "REQUEST_NOT_SENT")
            );
          }
        };
      (i.savePlayerScore = (t, e, n, r) =>
        new S.PromiseTask(
          (async () => {
            const a = (l[e] = l[e] || new R());
            try {
              const { closeSaving: d, closeSavingWithError: s } = a.startSaving(
                { playerName: r, score: n }
              );
              try {
                const g = await x({
                  leaderboardId: e,
                  playerName: r,
                  score: n,
                  runtimeScene: t,
                });
                d(g);
              } catch (g) {
                s(g);
              }
            } catch {}
          })()
        )),
        (i.saveConnectedPlayerScore = (t, e, n) =>
          new S.PromiseTask(
            (async () => {
              const r = S.playerAuthentication.getUserId(),
                a = S.playerAuthentication.getUserToken();
              if (!r || !a) {
                o.warn(
                  "Cannot save a score for a connected player if the player is not connected."
                );
                return;
              }
              const d = (l[e] = l[e] || new R());
              try {
                const { closeSaving: s, closeSavingWithError: g } =
                  d.startSaving({ playerId: r, score: n });
                try {
                  const h = await x({
                    leaderboardId: e,
                    authenticatedPlayerData: { playerId: r, playerToken: a },
                    score: n,
                    runtimeScene: t,
                  });
                  s(h);
                } catch (h) {
                  g(h);
                }
              } catch {}
            })()
          )),
        (i.isSaving = function (t) {
          if (t) return l[t] ? l[t].isSaving() : !1;
          const e = _({ hasSucceeded: !1 });
          return e ? e.isSaving() : !1;
        }),
        (i.hasBeenSaved = function (t) {
          if (t) return l[t] ? l[t].hasScoreBeenSaved : !1;
          const e = _({ hasSucceeded: !0 });
          return e ? e.hasScoreBeenSaved : !1;
        }),
        (i.hasSavingErrored = function (t) {
          if (t) return l[t] ? l[t].hasScoreSavingErrored : !1;
          const e = _({ hasSucceeded: !1 });
          return e ? e.hasScoreSavingErrored : !1;
        }),
        (i.getLastSaveError = function (t) {
          if (t) return l[t] ? l[t].lastSaveError : "NO_DATA_ERROR";
          const e = _({ hasSucceeded: !1 });
          return e ? e.lastSaveError : "NO_DATA_ERROR";
        }),
        (i.formatPlayerName = function (t) {
          return !t ||
            typeof t != "string" ||
            (typeof t == "string" && t.length === 0)
            ? ""
            : t
                .trim()
                .normalize("NFD")
                .replace(/[\u0300-\u036f]/g, "")
                .replace(/\s/g, "_")
                .replace(/[^\w|-]/g, "")
                .slice(0, 30);
        });
      const V = function (t) {
          return fetch(t, {
            method: "GET",
            headers: { "Content-Type": "application/json" },
          }).then(
            (e) =>
              e.ok
                ? !0
                : (o.error(
                    `Error while fetching leaderboard view, server returned: ${e.status} ${e.statusText}`
                  ),
                  !1),
            (e) => (o.error("Error while fetching leaderboard view:", e), !1)
          );
        },
        B = function (t, e, n) {
          switch (n.data) {
            case "closeLeaderboardView":
              (P = !0), i.closeLeaderboardView(t);
              break;
            case "leaderboardViewLoaded":
              if (
                (e &&
                  (w && clearTimeout(w),
                  T(!1, t, { callOnErrorIfDomElementContainerMissing: !1 })),
                !c)
              ) {
                m(t, "The leaderboard view couldn't be found. Doing nothing.");
                return;
              }
              (c.style.opacity = "1"), (f = !0), (p = !1);
              break;
          }
        },
        m = function (t, e) {
          o.error(e), (D = !0), (p = !1), i.closeLeaderboardView(t);
        },
        N = (t) => {
          w && clearTimeout(w),
            (w = setTimeout(() => {
              f ||
                m(
                  t,
                  "Leaderboard page did not send message in time. Closing leaderboard view."
                );
            }, 5e3));
        },
        T = function (t, e, n) {
          const r = e.getGame().getRenderer().getDomElementContainer();
          if (!r)
            return (
              n.callOnErrorIfDomElementContainerMissing &&
                m(
                  e,
                  "The div element covering the game couldn't be found, the leaderboard cannot be displayed."
                ),
              !1
            );
          if (t)
            r.children && r.children.length > 0
              ? r.insertBefore(u, r.children[0])
              : r.appendChild(u),
              c && (c.style.opacity = "0");
          else
            try {
              r.removeChild(u), c && (c.style.opacity = "1");
            } catch {}
          return !0;
        },
        $ = function (t) {
          const e = document.createElement("iframe");
          return (
            (e.src = t),
            (e.id = "leaderboard-view"),
            (e.style.position = "absolute"),
            (e.style.opacity = "0"),
            (e.style.pointerEvents = "all"),
            (e.style.backgroundColor = "#FFFFFF"),
            (e.style.top = "0px"),
            (e.style.height = "100%"),
            (e.style.left = "0px"),
            (e.style.width = "100%"),
            (e.style.border = "none"),
            e
          );
        };
      (i.displayLeaderboard = async function (t, e, n) {
        if (e === I) {
          if (p) {
            o.warn(
              `Already loading the view for the requested loader (${e}), ignoring.`
            );
            return;
          }
          if (f) {
            o.warn(
              `Already loaded the view for the requested loader (${e}), ignoring.`
            );
            return;
          }
        }
        (I = e),
          (D = !1),
          (f = !1),
          (p = !0),
          n && T(!0, t, { callOnErrorIfDomElementContainerMissing: !0 });
        const r = l[e];
        r && r.lastSavingPromise && (await r.lastSavingPromise);
        const a = r ? r.lastSavedLeaderboardEntryId : null,
          d = S.projectData.properties.projectUuid,
          s = t.getGame().isUsingGDevelopDevelopmentEnvironment(),
          g = new URLSearchParams();
        g.set("inGameEmbedded", "true"),
          s && g.set("dev", "true"),
          a && g.set("playerLeaderboardEntryId", a);
        const h = `https://gd.games/games/${d}/leaderboard/${e}?${g}`;
        try {
          const v = await V(h);
          if (e !== I) {
            o.warn(
              `Received a response for leaderboard ${e} though the last leaderboard requested is ${I}, ignoring this response.`
            );
            return;
          }
          if (!v) {
            m(
              t,
              "Leaderboard data could not be fetched. Closing leaderboard view if there is one."
            );
            return;
          }
          if (c)
            N(t),
              n && T(!0, t, { callOnErrorIfDomElementContainerMissing: !1 }),
              (c.src = h);
          else {
            const b = t.getGame().getRenderer().getDomElementContainer();
            if (!b) {
              m(
                t,
                "The div element covering the game couldn't be found, the leaderboard cannot be displayed."
              );
              return;
            }
            N(t),
              (c = $(h)),
              typeof window != "undefined" &&
                ((C = (L) => {
                  B(t, n, L);
                }),
                window.addEventListener("message", C, !0)),
              b.appendChild(c);
          }
        } catch (v) {
          o.error(v),
            m(
              t,
              "An error occurred when fetching leaderboard data. Closing leaderboard view if there is one."
            );
        }
      }),
        (i.isLeaderboardViewErrored = function () {
          return D;
        }),
        (i.isLeaderboardViewLoaded = function () {
          return f;
        }),
        (i.isLeaderboardViewLoading = function () {
          return p;
        }),
        (i.closeLeaderboardView = function (t) {
          try {
            if (
              (T(!1, t, { callOnErrorIfDomElementContainerMissing: !1 }), !c)
            ) {
              o.info(
                "The iframe displaying the current leaderboard couldn't be found, the leaderboard view must be already closed."
              );
              return;
            }
            const e = t.getGame().getRenderer().getDomElementContainer();
            if (!e) {
              o.info(
                "The div element covering the game couldn't be found, the leaderboard view must be already closed."
              );
              return;
            }
            typeof window != "undefined" &&
              (window.removeEventListener("message", C, !0), (C = null)),
              e.removeChild(c),
              (c = null);
          } finally {
            f = !1;
            const e = t.getGame().getRenderer().getCanvas();
            e && e.focus();
          }
        });
    })((O = M.leaderboards || (M.leaderboards = {})));
  })((G = S.evtTools || (S.evtTools = {})));
})(gdjs || (gdjs = {}));
//# sourceMappingURL=leaderboardstools.js.map
